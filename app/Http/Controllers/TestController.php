<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;
use App\Models\News;
use App\Models\BlogsCategory;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class TestController extends Controller
{

    public function blog_info_test()
    {
        $slug = "essential-skills-to-build-your-future-in-civil-engineering";
        try {
            // Fetch the blog post from the 'post' table using the slug
            $blog = Blogs::where('n_slug', $slug)->where('status', 1)->firstOrFail();

            $category_id = $blog->category_id;

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

            $blog_categories = BlogsCategory::where('category_status', 'Y')->get();

            // Fetch top 5 recent posts
            $recentPosts = Blogs::where('status', 1)
                ->orderBy('posted_at', 'DESC')
                ->limit(3)
                ->get()
                ->map(function ($post) {
                    $post->posted_at = Carbon::parse($post->posted_at);
                    return $post;
                });

            $popularPosts = Blogs::where('status', 1)
                ->orderBy('popular_priority', 'DESC')
                ->orderBy('posted_at', 'DESC')
                ->limit(5)
                ->get()
                ->map(function ($post) {
                    $post->posted_at = Carbon::parse($post->posted_at);
                    return $post;
                });

            $relatedPosts = Blogs::where('status', 1)
                ->where('category_id', $category_id)
                ->orderBy('posted_at', 'DESC')
                ->limit(5)
                ->get()
                ->map(function ($post) {
                    $post->posted_at = Carbon::parse($post->posted_at);
                    return $post;
                });

            $previousPost = Blogs::where('status', 1)
                ->where('id', '<', $blog->id)
                ->orderBy('id', 'DESC')
                ->first();

            // Fetch the next post (post with the next higher id)
            $nextPost = Blogs::where('status', 1)
                ->where('id', '>', $blog->id)
                ->orderBy('id', 'ASC')
                ->first();

            $categoryName = $blog->category_name ? $blog->category_name->category_name : 'No category';

            // Pass both the blog post and the comments to the view
            return view('university.blogs.blog_info_test', compact('categoryName', 'previousPost', 'nextPost', 'blog', 'comments', 'topLevelCommentsCount', 'blog_categories', 'recentPosts', 'popularPosts', 'relatedPosts'));
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            // Redirect to the 'tmu.home' route if the blog is not found
            return redirect()->route('tmuhome');
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

    public function news_info_test()
    {
      $slug = "foundation-course-for-mbbs-batch-2024-25-at-tmmcrc";
      $news = News::where('n_slug', $slug)->where('status', 1)->firstOrFail();
      return view('university.news.news_info_test', compact('news'));
   
    }
}