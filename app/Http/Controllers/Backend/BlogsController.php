<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\BlogsCategory;
use Illuminate\Validation\ValidationException;
use App\Exports\PermissionExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\PermissionImport;
use Illuminate\Support\Facades\DB;
use Exception;
use App\Models\Post;
use Intervention\Image\Laravel\Facades\Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;


class BlogsController extends Controller
{

    public function blog_info($slug)
    {
        try {
            // Fetch the blog post from the 'post' table using the slug
            $blog = Post::where('n_slug', $slug)->where('status', 1)->firstOrFail();

            // Fetch comments related to the blog post using a join
            $allComments = DB::table('post_comments')
                ->where('status', 1)
                ->where('post_id', $blog->id)
                ->orderBy('created_at', 'ASC')
                ->get()
                ->map(function ($comment) {
                    $comment->created_at = Carbon::parse($comment->created_at);
                    return $comment;
                });

            // Calculate the number of top-level comments
            $topLevelCommentsCount = $allComments->whereNull('parent_id')->count();

            // Organize comments into a hierarchical structure
            $comments = $this->organizeComments($allComments);

            $blog_categories = BlogsCategory::latest()->get();

            // Fetch top 5 recent posts
            $recentPosts = Post::where('status', 1)
                ->orderBy('posted_at', 'DESC')
                ->limit(5)
                ->get()
                ->map(function ($post) {
                    $post->posted_at = Carbon::parse($post->posted_at);
                    return $post;
                });

            $popularPosts = Post::where('status', 1)
                ->orderBy('popular_priority', 'DESC')
                ->orderBy('posted_at', 'DESC')
                ->limit(5)
                ->get()
                ->map(function ($post) {
                    $post->posted_at = Carbon::parse($post->posted_at);
                    return $post;
                });

            $previousPost = Post::where('status', 1)
                ->where('id', '<', $blog->id)
                ->orderBy('id', 'DESC')
                ->first();

            // Fetch the next post (post with the next higher id)
            $nextPost = Post::where('status', 1)
                ->where('id', '>', $blog->id)
                ->orderBy('id', 'ASC')
                ->first();

            // Pass both the blog post and the comments to the view
            return view('university.blogs.blog_info', compact('previousPost', 'nextPost', 'blog', 'comments', 'topLevelCommentsCount', 'blog_categories', 'recentPosts', 'popularPosts'));
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            // Redirect to the 'tmu.home' route if the blog is not found
            return redirect()->route('tmu.home');
        }
    }


    private function organizeComments($comments)
    {
        $grouped = [];

        // Group comments by parent_id
        foreach ($comments as $comment) {
            $grouped[$comment->parent_id][] = $comment;
        }

        // Function to build top-level comments and their direct replies
        $buildTree = function ($parentId) use (&$grouped) {
            $result = [];

            if (isset($grouped[$parentId])) {
                foreach ($grouped[$parentId] as $comment) {
                    // Get direct replies to the current comment
                    $comment->children = isset($grouped[$comment->id]) ? $grouped[$comment->id] : [];

                    // Only include the comment in the result
                    $result[] = $comment;
                }
            }

            return $result;
        };

        // Get top-level comments and their direct replies
        return $buildTree(null); // Start with null to get top-level comments
    }


    public function all_blogs(Request $request)
    {
        // Check if the 'clear_filters' parameter is present in the request
        if ($request->has('clear_filters')) {
            // Clear all filter session data
            session()->forget(['blogs_category', 'from_date', 'to_date']);

            // Initialize query builder without any filters
            $query = Post::where('status', 1);
        } else {
            if (!$request->hasAny(['blogs_category', 'from_date', 'to_date'])) {
                // Clear all filter session data
                session()->forget(['blogs_category', 'from_date', 'to_date']);
            }
        
            // Initialize query builder for posts
            $query = Post::where('status', 1);

            // Apply filters if present
            if ($request->has('blogs_category') && $request->blogs_category != '') {
                $query->where('category', $request->blogs_category);
                session(['blogs_category' => $request->blogs_category]);
            } else if (session()->has('blogs_category') && session('blogs_category') != '') {
                $query->where('category', session('blogs_category'));
            }

            $fromDate = $request->has('from_date') && $request->from_date != '' ? $request->from_date : session('from_date', null);
            $toDate = $request->has('to_date') && $request->to_date != '' ? $request->to_date : session('to_date', null);

            if ($fromDate) {
                $query->whereDate('posted_at', '>=', $fromDate);
                session(['from_date' => $fromDate]);
            }

            if ($toDate) {
                $query->whereDate('posted_at', '<=', $toDate);
                session(['to_date' => $toDate]);
            }
        }

        // Execute query with ordering and pagination
        $blog_post = $query->orderBy('posted_at', 'DESC')
            ->orderBy('id', 'DESC')
            ->paginate(10);

        $blog_categories = BlogsCategory::latest()->get();

        if ($request->ajax()) {
            return view('university.blogs.partials.blogs_list', compact('blog_post'))->render();
        }

        return view('university.blogs.all_blogs', compact('blog_categories', 'blog_post'));
    }
}
