<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Colleges;
use App\Models\BlogsCategory;
use App\Models\Blogs;
use Illuminate\Validation\ValidationException;
use App\Exports\PermissionExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Laravel\Facades\Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Response;
use Carbon\Carbon;

class BlogsController extends Controller
{
    //
    public function AllBlogsCategory(Request $request)
    {
       $id_profile = Auth::user()->id;
       $profileData = User::find($id_profile);
       $category = BlogsCategory::latest()->get();
       return view('admin.backend.pages.blogscategory.blog_category',compact('category','profileData'));

    }



    public function AllBlogs(Request $request)
    {
       $id_profile = Auth::user()->id;
       $profileData = User::find($id_profile);
       $blogs = Blogs::latest()->get();
       return view('admin.backend.pages.blogs.all_blogs',compact('blogs','profileData'));   
    }


    public function AddBlog(Request $request)
    {
       
       $id_profile = Auth::user()->id;
       $profileData = User::find($id_profile);
       $blogs_cat = BlogsCategory::latest()->get();
       return view('admin.backend.pages.blogs.add_blog',compact('profileData','blogs_cat'));


    }



    public function UpdateBlogPost(Request $request)
    {
        try{
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
                    'category' => 'required',
                    'status' => 'required'

                ]);
                $filePaths = [];
                $fileFields = ['post_path', 'post_thumb_path'];

                foreach($fileFields as $field)
                {
                    if($request->hasFile($field))
                    {
                        $file = $request->file($field);
                        $filename = time() . '_' . Str::random(10) . '.' . $file->getClientOriginalExtension();
                        $filePaths[$field] = $file->storeAs('uploads/blogs/',$filename);
                    }

                }

                $n_slug;
                $n_slug = $request->n_slug;
                if(empty($n_slug))
                {
                    $n_slug = Str::slug($request->post_title);
                }

                $blog->update([
                    'post_title' => $request->post_title,
                    'post_description' => $request->post_description,
                    'n_slug' => $n_slug,
                    'full_post' => $request->area,
                    'alt_tag_main_image' => $request->alt_tag_main_image,
                    'thumbnail_alt_tag' => $request->thumbnail_alt_tag,
                    'category' => $request->category,
                    'status' => $request->status,
                ]+ $filePaths);

DB::commit();
Session::flash('success','Blog Updated Successfully !');

}catch(ValidationException $e)
{

DB::rollBack();
Session::flash('error','Error in Updating the blog :'.$e->getMessage());

}catch(Exception $e)
{

DB::rollBack();
Session::flash('error', 'Error in Updating Blogs:'.$e->getMessage());

}

return redirect()->route('all.blogs');
}


public function StoreBlog(Request $request){
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
            'category' => 'required',
            'status' => 'required',
            'post_path' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'post_thumb_path' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $filePaths = [];
        $fileFields = ['post_path', 'post_thumb_path'];

        foreach ($fileFields as $field) {
            if ($request->hasFile($field)) {
                $file = $request->file($field);

                // Generate Unique Filename
                $timestamp = now()->timestamp;
                $filename = $timestamp . '_' . Str::random(10) . '.' . $file->getClientOriginalExtension();

                // Store file and assign to the correct field
                $filePaths[$field] = $file->storeAs('uploads/blogs/', $filename);
            }
        }

        // Generate slug from post title if needed
        $n_slug;
        $n_slug = $request->n_slug;
        if(empty($n_slug))
        {
            $n_slug = Str::slug($request->post_title);
        }
        
        // Fetch current month and year according to Asia/Kolkata timezone
        $post_month = now('Asia/Kolkata')->format('n');
        $post_month_name = now('Asia/Kolkata')->format('F');
        $post_year = now('Asia/Kolkata')->year;
        $display_main = 'Y';
        $alt_tag_main_image = $request->alt_tag_main_image;
        $thumbnail_alt_tag = $request->thumbnail_alt_tag;
     

        // Prepare data for insertion
        $data = [
            'post_title' => $request->post_title,
            'post_description' => $request->post_description,
            'n_slug' => $n_slug, // Use the generated slug
            'full_post' => $request->area,
            'alt_tag_main_image' => $request->alt_tag_main_image,
            'thumbnail_alt_tag' => $request->thumbnail_alt_tag,
            'posted_at' => $request->posted_at,
            'category' => $request->category,
            'status' => $request->status,
            'post_month' => $post_month,
            'post_month_name' => $post_month_name,
            'post_year' => $post_year,
            'display_main' => $display_main
        ];

        // Insert data into database
        Blogs::create($data + $filePaths);

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


public function AddBlogsCategory(Request $request){
try{

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

Session::flash('success','Blog Category Added Successfully');

}catch(ValidationException $e)
{
Session::flash('error','Validation error in Adding Blogs Category'.$e->getMessage());

}catch(Exception $e){

Session::flash('error','Error in Adding Blogs Category'.$e->getMessage());
}
return redirect()->route('blogs.category');

}

    public function EditBlogsCategory($id)
    {
        $profile_id = Auth::user()->id;
        $profileData = User::find($profile_id);
        $blogs_category = BlogsCategory::find($id);
        return view('admin.backend.pages.blogscategory.edit_blogs_category',compact('profileData','blogs_category'));


    }

public function UpdateBlogsCategory(Request $request){
try{

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

Session::flash('success','Category Updated successfully');

}catch(ValidationException $e){

Session::flash('error','Validation Error in updating category'.$e->getMessage());

}catch(Exception $e){

Session::flash('error','Error in updating category'.$e->getMessage());

}

return redirect()->route('blogs.category');

}


public function DeleteBlogsCategory($category_id)
{
try{
BlogsCategory::find($category_id)->delete();
Session::flash('success','Blog Category Deleted Successfully');
}catch(Exception $e)
{
  Session::flash('error','Error in Deleting Blog Category');  
}
return redirect()->route('blogs.category');
}


public function DeleteBlogsPost($blog_id)
{

try{
Blogs::find($blog_id)->delete();
Session::flash('success','Blog Deleted Successfully');
}catch(Exception $e)
{
Session::flash('error','Error in deleting Blog'.$e->getMessage());
}
return redirect()->route('all.blogs');
}


public function EditBlogsPost($id)
{
$id_profile = Auth::User()->id;
$profileData = User::find( $id_profile);
$blogs_category = BlogsCategory::latest()->get();
$colleges = Colleges::latest()->get();
$blog = Blogs::find($id);
return view('admin.backend.pages.blogs.edit_blog_post',compact('profileData','blog','blogs_category'));
}


public function searchBlogSlug(Request $request)
{
if($request->ajax())
{
    $url = $request->input('value');
    $result = Blogs::where('n_slug',$url)->exists();
    return Response::json(['exists'=>$result]);

}else{
    abort(404);
}

}

// Sankit Code Starts Here

  public function blog_info($slug)
    {
        try {
            // Fetch the blog post from the 'post' table using the slug
            $blog = Blogs::where('n_slug', $slug)->where('status', 1)->firstOrFail();

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
            $recentPosts = Blogs::where('status', 1)
                ->orderBy('posted_at', 'DESC')
                ->limit(5)
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

            $previousPost = Blogs::where('status', 1)
                ->where('id', '<', $blog->id)
                ->orderBy('id', 'DESC')
                ->first();

            // Fetch the next post (post with the next higher id)
            $nextPost = Blogs::where('status', 1)
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
            $query = Blogs::where('status', 1);
        } else {
            if (!$request->hasAny(['blogs_category', 'from_date', 'to_date'])) {
                // Clear all filter session data
                session()->forget(['blogs_category', 'from_date', 'to_date']);
            }
        
            // Initialize query builder for posts
            $query = Blogs::where('status', 1);

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
// Sankit Code Ends Here
    
}

