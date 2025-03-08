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
use App\Models\Colleges;
use App\Models\Blogs;
use Intervention\Image\Laravel\Facades\Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;


class BlogsController extends Controller
{


    public function AllBlogsCategory(Request $request)
    {
        $id_profile = Auth::user()->id;
        $profileData = User::find($id_profile);
        $category = BlogsCategory::latest()->get();
        return view('admin.backend.pages.blogscategory.blog_category', compact('category', 'profileData'));
    }



    public function AllBlogs(Request $request)
    {
        $id_profile = Auth::user()->id;
        $profileData = User::find($id_profile);
        $blogs = Blogs::latest()->get();
        return view('admin.backend.pages.blogs.all_blogs', compact('blogs', 'profileData'));
    }


    public function AddBlog(Request $request)
    {

        $id_profile = Auth::user()->id;
        $profileData = User::find($id_profile);
        $blogs_cat = BlogsCategory::latest()->get();
        return view('admin.backend.pages.blogs.add_blog', compact('profileData', 'blogs_cat'));
    }



    public function UpdateBlogPost(Request $request)
    {
        try {
            DB::beginTransaction();
            $id = $request->post_id;
            $blog = Blogs::findOrFail($id);
            $request->validate([
                'post_title' => 'required',
                'post_description' => 'required',
                'n_slug' => 'required',
                'area' => 'required',
                'alt_tag_main_image' => 'required',
                'thumbnail_alt_tag' => 'required',
                'category_id' => 'required',
                'status' => 'required'

            ]);
            $filePaths = [];
            $fileFields = ['post_path', 'post_thumb_path', 'monaco_image_path'];

            foreach ($fileFields as $field) {
                if ($request->hasFile($field)) {
                    $file = $request->file($field);
                    $filename = time() . '_' . Str::random(10) . '.' . $file->getClientOriginalExtension();
                    $filePaths[$field] = $file->storeAs('uploads/blogs/', $filename);
                }
            }

            $n_slug;
            $n_slug = $request->n_slug;
            if (empty($n_slug)) {
                $n_slug = Str::slug($request->post_title);
            }

            $blog->update([
                'post_title' => $request->post_title,
                'post_description' => $request->post_description,
                'n_slug' => $n_slug,
                'full_post' => $request->area,
                'alt_tag_main_image' => $request->alt_tag_main_image,
                'thumbnail_alt_tag' => $request->thumbnail_alt_tag,
                'category_id' => $request->category_id,
                'status' => $request->status,
                'monaco_image_alt_tag' => $request->monaco_image_alt_tag
            ] + $filePaths);

            DB::commit();
            Session::flash('success', 'Blog Updated Successfully !');
        } catch (ValidationException $e) {

            DB::rollBack();
            Session::flash('error', 'Error in Updating the blog :' . $e->getMessage());
        } catch (Exception $e) {

            DB::rollBack();
            Session::flash('error', 'Error in Updating Blogs:' . $e->getMessage());
        }

        return redirect()->route('all.blogs');
    }


    // public function StoreBlog(Request $request)
    // {
    //     try {
    //         DB::beginTransaction();

    //         // Validate input data
    //         $validateData = $request->validate([
    //             'post_title' => 'required',
    //             'post_description' => 'required',
    //             'n_slug' => 'required',
    //             'area' => 'required',
    //             'alt_tag_main_image' => 'required',
    //             'thumbnail_alt_tag' => 'required',
    //             'posted_at' => 'required',
    //             'category_id' => 'required',
    //             'status' => 'required',
    //             'monaco_image_alt_tag' => 'required',
    //             'monaco_image_path' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    //             'post_path' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    //             'post_thumb_path' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
    //         ]);

    //         $filePaths = [];
    //         $fileFields = ['post_path', 'post_thumb_path', 'monaco_image_path'];

    //         foreach ($fileFields as $field) {
    //             if ($request->hasFile($field)) {
    //                 $file = $request->file($field);

    //                 // Generate Unique Filename
    //                 $timestamp = now()->timestamp;
    //                 $filename = $timestamp . '_' . Str::random(10) . '.' . $file->getClientOriginalExtension();

    //                 // Store file and assign to the correct field
    //                 $filePaths[$field] = $file->storeAs('uploads/blogs/', $filename);
    //             }
    //         }

    //         // Generate slug from post title if needed
    //         $n_slug;
    //         $n_slug = $request->n_slug;
    //         if (empty($n_slug)) {
    //             $n_slug = Str::slug($request->post_title);
    //         }

    //         // Fetch current month and year according to Asia/Kolkata timezone
    //         $post_month = now('Asia/Kolkata')->format('n');
    //         $post_month_name = now('Asia/Kolkata')->format('F');
    //         $post_year = now('Asia/Kolkata')->year;
    //         $display_main = 'Y';
    //         $alt_tag_main_image = $request->alt_tag_main_image;
    //         $thumbnail_alt_tag = $request->thumbnail_alt_tag;


    //         // Prepare data for insertion
    //         $data = [
    //             'post_title' => $request->post_title,
    //             'post_description' => $request->post_description,
    //             'n_slug' => $n_slug, // Use the generated slug
    //             'full_post' => $request->area,
    //             'alt_tag_main_image' => $request->alt_tag_main_image,
    //             'thumbnail_alt_tag' => $request->thumbnail_alt_tag,
    //             'posted_at' => $request->posted_at,
    //             'category_id' => $request->category_id,
    //             'status' => $request->status,
    //             'post_month' => $post_month,
    //             'post_month_name' => $post_month_name,
    //             'post_year' => $post_year,
    //             'display_main' => $display_main,
    //             'monaco_image_alt_tag' => $request->monaco_image_alt_tag
    //         ];

    //         // Insert data into database
    //         Blogs::create($data + $filePaths);

    //         DB::commit();
    //         Session::flash('success', 'Blog Uploaded Successfully');
    //     } catch (ValidationException $e) {
    //         DB::rollBack();
    //         Session::flash('error', 'Validation Error in Uploading Blog: ' . $e->getMessage());
    //     } catch (Exception $e) {
    //         DB::rollBack();
    //         Session::flash('error', 'Error in Uploading Blog: ' . $e->getMessage());
    //     }

    //     return redirect()->route('all.blogs');
    // }

    public function StoreBlog(Request $request)
    {
        try {
            DB::beginTransaction();

            // Validate input data
            $validateData = $request->validate([
                'post_title' => 'required',
                'post_description' => 'required',
                'n_slug' => 'required',
                'area' => 'required',
                'alt_tag_main_image' => 'required',
                'thumbnail_alt_tag' => 'required',
                'posted_at' => 'required',
                'category_id' => 'required|integer|min:1',
                'status' => 'required',
                'monaco_image_alt_tag' => 'required',
                'monaco_image_path' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'post_path' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'post_thumb_path' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            // Define storage paths
            $postStoragePath = 'uploads/blogs/';
            $monacoStoragePath = 'monaco/assets/image/blog/';

            $filePaths = [];

            // Handle file uploads
            $fileFields = [
                'post_path' => $postStoragePath,
                'post_thumb_path' => $postStoragePath,
                'monaco_image_path' => $monacoStoragePath
            ];

            foreach ($fileFields as $field => $storagePath) {
                if ($request->hasFile($field)) {
                    $file = $request->file($field);

                    // Generate Unique Filename
                    $timestamp = now()->timestamp;
                    $filename = $timestamp . '_' . Str::random(10) . '.' . $file->getClientOriginalExtension();

                    // Move file to the correct directory in `public/`
                    $file->move(public_path($storagePath), $filename);

                    // Store only the relative path (after 'public/')
                    $filePaths[$field] = $storagePath . $filename;
                }
            }

            // Generate slug from post title if needed
            $n_slug = $request->n_slug ?: Str::slug($request->post_title);

            // Fetch current month and year according to Asia/Kolkata timezone
            $post_month = now('Asia/Kolkata')->format('n');
            $post_month_name = now('Asia/Kolkata')->format('F');
            $post_year = now('Asia/Kolkata')->year;
            $display_main = 'Y';


            // Prepare data for insertion
            $data = [
                'post_title' => $request->post_title,
                'post_description' => $request->post_description,
                'n_slug' => $n_slug,
                'full_post' => $request->area,
                'alt_tag_main_image' => $request->alt_tag_main_image,
                'thumbnail_alt_tag' => $request->thumbnail_alt_tag,
                'posted_at' => $request->posted_at,
                'category_id' => (int) $request->category_id,
                'status' => $request->status,
                'post_month' => $post_month,
                'post_month_name' => $post_month_name,
                'post_year' => $post_year,
                'display_main' => $display_main,
                'monaco_image_alt_tag' => $request->monaco_image_alt_tag,

                // File paths
                'post_path' => $filePaths['post_path'] ?? null,
                'post_thumb_path' => $filePaths['post_thumb_path'] ?? null,
                'monaco_image_path' => $filePaths['monaco_image_path'] ?? null,

                // Additional fields for filenames and absolute paths
                'post_image' => isset($filePaths['post_path']) ? basename($filePaths['post_path']) : null,
                'post_full_path' => isset($filePaths['post_path']) ? asset($filePaths['post_path']) : null,
                'post_thumb' => isset($filePaths['post_thumb_path']) ? basename($filePaths['post_thumb_path']) : null,
                'post_thumb_full_path' => isset($filePaths['post_thumb_path']) ? asset($filePaths['post_thumb_path']) : null
            ];

            // Insert data into database
            Blogs::create($data);

            DB::commit();
            Session::flash('success', 'Blog Uploaded Successfully');
        } catch (ValidationException $e) {
            DB::rollBack();
            Session::flash('error', 'Validation Error in Uploading Blog: ' . $e->getMessage());
        } catch (Exception $e) {
            DB::rollBack();
            Session::flash('error', 'Error in Uploading Blog: ' . $e->getMessage());
        }

        return redirect()->route('all.blogs');
    }



    public function AddBlogsCategory(Request $request)
    {
        try {

            $validateData = $request->validate([
                'category_name' => 'required|max:255',
                'category_slug' => 'required',
                'category_status' => 'required'
            ]);

            BlogsCategory::create([
                'category_name' => $validateData['category_name'],
                'category_slug' => $validateData['category_slug'],
                'category_status' => $validateData['category_status']
            ]);

            Session::flash('success', 'Blog Category Added Successfully');
        } catch (ValidationException $e) {
            Session::flash('error', 'Validation error in Adding Blogs Category' . $e->getMessage());
        } catch (Exception $e) {

            Session::flash('error', 'Error in Adding Blogs Category' . $e->getMessage());
        }
        return redirect()->route('blogs.category');
    }

    public function EditBlogsCategory($id)
    {
        $profile_id = Auth::user()->id;
        $profileData = User::find($profile_id);
        $blogs_category = BlogsCategory::find($id);
        return view('admin.backend.pages.blogscategory.edit_blogs_category', compact('profileData', 'blogs_category'));
    }

    public function UpdateBlogsCategory(Request $request)
    {
        try {

            $id = $request->id;
            $validateData = $request->validate([
                'category_name' => 'required',
                'category_slug' => 'required',
                'category_status' => 'required'
            ]);

            BlogsCategory::find($id)->update([
                'category_name' => $validateData['category_name'],
                'category_slug' => $validateData['category_slug'],
                'category_status' => $validateData['category_status']
            ]);

            Session::flash('success', 'Category Updated successfully');
        } catch (ValidationException $e) {

            Session::flash('error', 'Validation Error in updating category' . $e->getMessage());
        } catch (Exception $e) {

            Session::flash('error', 'Error in updating category' . $e->getMessage());
        }

        return redirect()->route('blogs.category');
    }


    public function DeleteBlogsCategory($category_id)
    {
        try {
            BlogsCategory::find($category_id)->delete();
            Session::flash('success', 'Blog Category Deleted Successfully');
        } catch (Exception $e) {
            Session::flash('error', 'Error in Deleting Blog Category');
        }
        return redirect()->route('blogs.category');
    }


    public function DeleteBlogsPost($blog_id)
    {

        try {
            Blogs::find($blog_id)->delete();
            Session::flash('success', 'Blog Deleted Successfully');
        } catch (Exception $e) {
            Session::flash('error', 'Error in deleting Blog' . $e->getMessage());
        }
        return redirect()->route('all.blogs');
    }


    public function EditBlogsPost($id)
    {
        $id_profile = Auth::User()->id;
        $profileData = User::find($id_profile);
        $blogs_category = BlogsCategory::latest()->get();
        $colleges = Colleges::latest()->get();
        $blog = Blogs::find($id);
        return view('admin.backend.pages.blogs.edit_blog_post', compact('profileData', 'blog', 'blogs_category'));
    }

    public function blog_info($slug, Request $request)
    {
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
            return view('university.blogs.blog_info', compact('categoryName', 'previousPost', 'nextPost', 'blog', 'comments', 'topLevelCommentsCount', 'blog_categories', 'recentPosts', 'popularPosts', 'relatedPosts'));
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

    public function submitComment(Request $request, $id)
    {
        // Validate the incoming request
        $request->validate([
            'template-contactform-name' => 'required|string|max:255',
            'template-contactform-email' => 'required|email',
            'template-contactform-phone' => 'nullable|string|max:20', // Adjust the max length if needed
            'template-contactform-message' => 'required|string',
        ]);

        // Store the comment directly in the database
        DB::table('post_comments')->insert([
            'post_id' => $id, // The ID of the blog being displayed
            'parent_id' => null, // Change this if it's a reply to a comment
            'name' => $request->input('template-contactform-name'),
            'email' => $request->input('template-contactform-email'),
            'phone_no' => $request->input('template-contactform-phone'),
            'comment_content' => $request->input('template-contactform-message'),
            'status' => 0, // Set status to 0
            'created_at' => now(), // Current timestamp
            'updated_at' => now(), // Current timestamp
        ]);

        // Redirect back with a success message
        return response()->json(['success' => true, 'message' => 'Comment sent successfully!']);
    }
    public function all_blogs(Request $request)
    {
        // Fetch all active blogs (status = 1) with associated categories and sort by 'posted_at' and 'id' in descending order
        $activeBlogs = Blogs::with('category_name')
            ->where('status', 1)
            ->orderBy('posted_at', 'DESC')
            ->orderBy('id', 'DESC')
            ->get();

        // Group blogs by their category name
        $groupedBlogs = $activeBlogs->groupBy(function ($blog) {
            return $blog->category_name->category_name ?? 'Uncategorized';
        });

        // Return the view with both the grouped blogs and all active blogs
        return view('university.blogs.blognew', [
            'groupedBlogs' => $groupedBlogs,  // Blogs separated by category name
            'allBlogs' => $activeBlogs,       // All active blogs from all categories
        ]);
    }

    public function blogs_active()
    {
        $allBlogs = Blogs::where('status', 1)
            ->orderBy('posted_at', 'desc')
            ->orderBy('id', 'desc')
            ->get();

        return view('university.blogs.all', compact('allBlogs'));
    }
    public function blogs_Category($category)
    {

        $category_slug = 'blog/category/' . $category;


        $blog_category = BlogsCategory::where('category_slug', $category_slug)
            ->where('category_status', 'Y')
            ->firstOrFail();

        $blog_category_id = $blog_category->category_id;
        $category = $blog_category->category_name;


        $categoryBlogs = Blogs::where('category_id', $blog_category_id)
            ->where('status', 1)
            ->orderBy('posted_at', 'desc')
            ->orderBy('id', 'desc')
            ->get();

        return view('university.blogs.category', compact('categoryBlogs', 'category'));
    }
}
