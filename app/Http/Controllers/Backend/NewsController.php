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
use App\Models\NewsCategory;
use Illuminate\Validation\ValidationException;
use App\Exports\PermissionExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\PermissionImport;
use Illuminate\Support\Facades\DB;
use Exception;
use App\Models\News;
use Intervention\Image\Laravel\Facades\Image;
use Illuminate\Support\Str;
use Carbon\Carbon;


class NewsController extends Controller
{

   // News Category Controller Starts
   public function AllNewsCategory()
   {
      $id = Auth::user()->id;
      $profileData = User::find($id);
      $category = NewsCategory::latest()->get();
      return view('admin.backend.pages.newscategory.news_category', compact('category', 'profileData'));
   } // End Method


   public function AddNewsCategory(Request $request)
   {
      try {
         $validateData = $request->validate([
            'category_name' => 'required|max:255',
            'category_slug' => 'required',
            'category_status' => 'required'
         ]);

         NewsCategory::create([
            'category_name' => $validateData['category_name'],
            'category_slug' => $validateData['category_slug'],
            'category_status' => $validateData['category_status']
         ]);
         Session::flash('success', 'News Category Added Successfully');
      } catch (ValidationException $e) {
         Session::flash('error', 'Validation Error in Adding News Category' . $e->getMessage());
      } catch (Exception $e) {
         Session::flash('error', 'Error in Adding News Category' . $e->getMessage());
      }

      return redirect()->route('news.category');
   }

   public function EditNewsCategory($id)
   {
      $id_profile = Auth::user()->id;
      $profileData = User::find($id_profile);
      $news_category = NewsCategory::find($id);
      return view('admin.backend.pages.newscategory.edit_news_category', compact('profileData', 'news_category'));
   }

   public function UpdateNewsCategory(Request $request)
   {
      try {
         $news_id = $request->id;
         $validateData = $request->validate([
            'category_name' => 'required',
            'category_status' => 'required',
            'category_slug' => 'required'
         ]);

         NewsCategory::find($news_id)->update([
            'category_name' => $validateData['category_name'],
            'category_status' => $validateData['category_status'],
            'category_slug' => $validateData['category_slug']
         ]);

         Session::flash('success', 'Category Updated Successfully');
      } catch (ValidationException $e) {
         Session::flash('error', 'Validation Error in Updating Category' . $e->getMessage());
      } catch (Exception $e) {
         Session::flash('error', 'Error in Updating Category' . $e->getMessage());
      }
      return redirect()->route('news.category');
   }


   public function DeleteNewsCategory($category_id)
   {
      try {
         NewsCategory::find($category_id)->delete();
         Session::flash('success', 'Category Deleted Successfully');
      } catch (Exception $e) {

         Session::flash('error', 'Error in deleting Category' . $e->getMessage());
      }
      return redirect()->route('news.category');
   }

   public function AllNews()
   {
      $id_profile = Auth::user()->id;
      $profileData = User::find($id_profile);
      $news = News::latest()->get();
      return view('admin.backend.pages.news.all_news', compact('news', 'profileData'));
   }

   public function AddNewsPost()
   {
      $news_cat = NewsCategory::latest()->get();
      $colleges = Colleges::latest()->get();
      $id_profile = Auth::user()->id;
      $profileData = User::find($id_profile);
      return view('admin.backend.pages.news.add_news_post', compact('profileData', 'news_cat', 'colleges'));
   }

   public function storeNewsPost(Request $request)
   {
      try {
         DB::beginTransaction();

         $validateData = $request->validate([
            'cd_id' => 'required',
            'event_date' => 'required|date',
            'event_title' => 'required',
            'category' => 'required',
            'area' => 'required',
            'display_main' => 'required',
            'status' => 'required',
            'ti_path' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title_image_tag' => 'required',
            'ei1_path' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'event_image1_tag' => 'required',
            'monaco_image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'monaco_image_alt_tag' => 'nullable|string|max:255'
         ]);

         $filePaths = [];
         $fileFields = ['ti_path', 'ei1_path', 'ei2_path', 'ei3_path', 'ei4_path', 'ei5_path', 'ei6_path'];

         foreach ($fileFields as $field) {
            if ($request->hasFile($field)) {
               $file = $request->file($field);
               $timestamp = now()->timestamp;
               $filename = $timestamp . '_' . Str::random(10) . '.' . $file->getClientOriginalExtension();

               // Store files in public/uploads/events/past_event
               $file->move(public_path('uploads/events/past_event'), $filename);
               $filePaths[$field] = 'uploads/events/past_event/' . $filename;

               // Save absolute path and filename for ti_path
               if ($field === 'ti_path') {
                  $filePaths['ti_full_path'] = public_path('uploads/events/past_event/' . $filename);
                  $filePaths['event_image_1'] = $filename;
               }
            }
         }

         // Handle monaco_image_path separately
         if ($request->hasFile('monaco_image_path')) {
            $monacoFile = $request->file('monaco_image_path');
            $monacoFilename = now()->timestamp . '_' . Str::random(10) . '.' . $monacoFile->getClientOriginalExtension();
            $monacoFile->move(public_path('monaco/assets/image/news'), $monacoFilename);
            $filePaths['monaco_image_path'] = 'monaco/assets/image/news/' . $monacoFilename;
         }

         // Extract date components
         $eventDate = Carbon::parse($request->event_date);
         $event_day = $eventDate->day;
         $event_month = $eventDate->month;
         $event_month_name = $eventDate->format('F');
         $event_year = $eventDate->year;

         $slug = Str::slug($request->event_title);
         date_default_timezone_set('Asia/Kolkata');

         $data = [
            'cd_id' => $request->cd_id,
            'event_date' => $request->event_date,
            'event_day' => $event_day,
            'event_month' => $event_month,
            'event_month_name' => $event_month_name,
            'event_year' => $event_year,
            'event_title' => $request->event_title,
            'title_image_tag' => $request->title_image_tag,
            'category' => $request->category,
            'event_full_description' => $request->area,
            'display_main' => $request->display_main,
            'status' => $request->status,
            'event_image1_tag' => $request->event_image1_tag,
            'event_image2_tag' => $request->event_image1_tag,
            'event_image3_tag' => $request->event_image3_tag,
            'event_image4_tag' => $request->event_image4_tag,
            'event_image5_tag' => $request->event_image5_tag,
            'event_image6_tag' => $request->event_image6_tag,
            'monaco_image_alt_tag' => $request->monaco_image_alt_tag,
            'n_slug' => $slug
         ];

         News::create($data + $filePaths);

         DB::commit();
         Session::flash('success', 'News Uploaded Successfully!');
      } catch (ValidationException $e) {
         DB::rollBack();
         Session::flash('error', 'Validation Error in Uploading News: ' . $e->getMessage());
      } catch (Exception $e) {
         DB::rollBack();
         Session::flash('error', 'Error in Uploading News: ' . $e->getMessage());
      }

      return redirect()->route('all.news');
   }


   public function EditNewsPost($id)
   {
      $id_profile = Auth::User()->id;
      $profileData = User::find($id_profile);
      $news_cat = NewsCategory::latest()->get();
      $colleges = Colleges::latest()->get();
      $news = News::find($id);
      return view('admin.backend.pages.news.edit_news_post', compact('profileData', 'news', 'news_cat', 'colleges'));
   }

   public function UpdateNewsPost(Request $request)
   {
      try {
         DB::beginTransaction();

         $id = $request->news_id;
         $news = News::findOrFail($id);

         // Validate request data
         $request->validate([
            'cd_id' => 'required',
            'event_date' => 'required',
            'event_title' => 'required',
            'category' => 'required',
            'area' => 'required',
            'display_main' => 'required',
            'status' => 'required',
            'ti_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title_image_tag' => 'required',
            'ei1_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'event_image1_tag' => 'required',
            'news_slug' => 'required'
         ]);
         date_default_timezone_set('Asia/Kolkata');
         // Handle file uploads
         $filePaths = [];
         $fileFields = ['ti_path', 'ei1_path', 'ei2_path', 'ei3_path', 'ei4_path', 'ei5_path', 'ei6_path'];
         foreach ($fileFields as $field) {
            if ($request->hasFile($field)) {
               $file = $request->file($field);
               $filename = time() . '_' . Str::random(10) . '.' . $file->getClientOriginalExtension();
               $filePaths[$field] = $file->storeAs('news_images', $filename);
            }
         }



         // $slug = Str::slug($request->event_title);

         // Update news
         $news->update([
            'cd_id' => $request->cd_id,
            'event_date' => $request->event_date,
            'event_title' => $request->event_title,
            'title_image_tag' => $request->title_image_tag,
            'category' => $request->category,
            'event_full_description' => $request->area,
            'display_main' => $request->display_main,
            'status' => $request->status,
            'event_image1_tag' => $request->event_image1_tag,
            'event_image2_tag' => $request->event_image1_tag, // Confirm if this is intended
            'event_image3_tag' => $request->event_image3_tag,
            'event_image4_tag' => $request->event_image4_tag,
            'event_image5_tag' => $request->event_image5_tag,
            'event_image6_tag' => $request->event_image6_tag,
            'n_slug' => $request->news_slug
         ] + $filePaths);

         DB::commit();
         Session::flash('success', 'News Updated Successfully !');
      } catch (Exception $e) {
         DB::rollBack();
         Session::flash('error', 'Error in Updating News: ' . $e->getMessage());
      }
      return redirect()->route('all.news');
   }


   public function DeleteNewsPost($news_id)
   {
      try {
         News::find($news_id)->delete();
         Session::flash('success', 'News Deleted Successfully');
      } catch (Exception $e) {
         Session::flash('error', 'Error in deleting News' . $e->getMessage());
      }
      return redirect()->route('all.news');
   }


   // public function news_info($slug)
   // {
   // $news = News::where('n_slug',$slug)->where('status',1)->firstOrFail();
   // return view('university.news.news_info',compact('news'));
   // }

   // public function all_news(){   
   //   $news_post = News::where('status',1)
   //   ->latest()
   //   ->orderBy('id', 'DESC')
   //   ->paginate(10);

   //   $news_categories = NewsCategory::latest()->get();
   //   $colleges = Colleges::latest()->get();
   //   return view('university.news.all_news',compact('news_categories','colleges','news_post'));

   // }


   //Sankit Code Starts here 


   public function news_info($slug)
   {
      $news = News::where('n_slug', $slug)->where('status', 1)->firstOrFail();
      $categoryId = NewsCategory::where('category_name', $news->category)->value('id');
      return view('university.news.news_info', compact('news', 'categoryId'));

      // return view('university.news.news_info', compact('news'));
   }


   // public function all_news(Request $request)
   // {
   //    // Check if 'clear_filters' parameter is present in the request
   //    if ($request->has('clear_filters')) {
   //       // Clear all filter session data
   //       session()->forget(['news_category', 'from_date', 'to_date', 'college_name']);
   //       $query = News::where('status', 1);
   //    } else {
   //       $query = News::where('status', 1);

   //       // 🔹 Category Filter
   //       if ($request->has('news_category')) {
   //          if ($request->news_category != '') {
   //             $category = NewsCategory::find($request->news_category);
   //             if ($category) {
   //                $query->where('category', $category->category_name);
   //                session(['news_category' => $category->category_name]);
   //             }
   //          } else {
   //             session()->forget('news_category');
   //          }
   //       } else if (session()->has('news_category') && session('news_category') != '') {
   //          $query->where('category', session('news_category'));
   //       }

   //       // 🔹 College Filter
   //       if ($request->has('college_name')) {
   //          if ($request->college_name != '') {
   //             $collegeId = $request->college_name;
   //             $query->where('cd_id', $collegeId);
   //             session(['college_name' => $collegeId]);
   //          } else {
   //             session()->forget('college_name');
   //          }
   //       } else if (session()->has('college_name') && session('college_name') != '') {
   //          $query->where('cd_id', session('college_name'));
   //       }

   //       // 🔹 From Date Filter
   //       if ($request->has('from_date')) {
   //          if ($request->from_date != '') {
   //             $fromDate = $request->from_date;
   //             $query->whereDate(
   //                DB::raw("STR_TO_DATE(CONCAT(event_day, '-', event_month, '-', event_year), '%d-%m-%Y')"),
   //                '>=',
   //                $fromDate
   //             );
   //             session(['from_date' => $fromDate]);
   //          } else {
   //             session()->forget('from_date');
   //          }
   //       } else if (session()->has('from_date')) {
   //          $fromDate = session('from_date');
   //          $query->whereDate(
   //             DB::raw("STR_TO_DATE(CONCAT(event_day, '-', event_month, '-', event_year), '%d-%m-%Y')"),
   //             '>=',
   //             $fromDate
   //          );
   //       }

   //       // 🔹 To Date Filter
   //       if ($request->has('to_date')) {
   //          if ($request->to_date != '') {
   //             $toDate = $request->to_date;
   //             $query->whereDate(
   //                DB::raw("STR_TO_DATE(CONCAT(event_day, '-', event_month, '-', event_year), '%d-%m-%Y')"),
   //                '<=',
   //                $toDate
   //             );
   //             session(['to_date' => $toDate]);
   //          } else {
   //             session()->forget('to_date');
   //          }
   //       } else if (session()->has('to_date')) {
   //          $toDate = session('to_date');
   //          $query->whereDate(
   //             DB::raw("STR_TO_DATE(CONCAT(event_day, '-', event_month, '-', event_year), '%d-%m-%Y')"),
   //             '<=',
   //             $toDate
   //          );
   //       }
   //    }

   //    // Execute query with ordering by date and pagination
   //    $news_post = $query
   //       ->orderBy(DB::raw("STR_TO_DATE(CONCAT(event_day, '-', event_month, '-', event_year), '%d-%m-%Y')"), 'DESC')
   //       ->orderBy('id', 'DESC')
   //       ->paginate(10);

   //    $news_categories = NewsCategory::latest()->get();
   //    $colleges = Colleges::latest()->get();

   //    if ($request->ajax()) {
   //       return view('university.news.partials.news_list', compact('news_post'))->render();
   //    }

   //    return view('university.news.all_news', compact('news_categories', 'colleges', 'news_post'));
   // }


   
   public function all_news(Request $request)
   {
       if ($request->has('clear_filters')) {
           // Clear everything when Clear Filters is explicitly clicked
           session()->forget(['news_category', 'from_date', 'to_date', 'college_name']);
           $query = News::where('status', 1);
   
       } else if ($request->has('filters_submitted')) {
           // User submitted the form (even with empty filters)
           $query = News::where('status', 1);
   
           // 🔹 Category Filter
           if ($request->has('news_category')) {
               if ($request->news_category != '') {
                   $category = NewsCategory::find($request->news_category);
                   if ($category) {
                       $query->where('category', $category->category_name);
                       session(['news_category' => $category->category_name]);
                   }
               } else {
                   session()->forget('news_category');
               }
           }
   
           // 🔹 College Filter
           if ($request->has('college_name')) {
               if ($request->college_name != '') {
                   $collegeId = $request->college_name;
                   $query->where('cd_id', $collegeId);
                   session(['college_name' => $collegeId]);
               } else {
                   session()->forget('college_name');
               }
           }
   
           // 🔹 From Date Filter
           if ($request->has('from_date')) {
               if ($request->from_date != '') {
                   $fromDate = $request->from_date;
                   $query->whereDate(
                       DB::raw("STR_TO_DATE(CONCAT(event_day, '-', event_month, '-', event_year), '%d-%m-%Y')"),
                       '>=',
                       $fromDate
                   );
                   session(['from_date' => $fromDate]);
               } else {
                   session()->forget('from_date');
               }
           }
   
           // 🔹 To Date Filter
           if ($request->has('to_date')) {
               if ($request->to_date != '') {
                   $toDate = $request->to_date;
                   $query->whereDate(
                       DB::raw("STR_TO_DATE(CONCAT(event_day, '-', event_month, '-', event_year), '%d-%m-%Y')"),
                       '<=',
                       $toDate
                   );
                   session(['to_date' => $toDate]);
               } else {
                   session()->forget('to_date');
               }
           }
   
       } else {
           // No filters submitted and not clearing => refresh or first visit
           // Clear old filters to avoid persisting unintentionally
           session()->forget(['news_category', 'from_date', 'to_date', 'college_name']);
           $query = News::where('status', 1);
       }
   
       // Sorting + Pagination
      //  $news_post = $query
      //      ->orderBy(DB::raw("STR_TO_DATE(CONCAT(event_day, '-', event_month, '-', event_year), '%d-%m-%Y')"), 'DESC')
      //      ->orderBy('id', 'DESC')
      //      ->paginate(10);
      $news_post = $query
      ->orderByRaw('STR_TO_DATE(event_date, "%Y-%m-%d") DESC')
      ->orderBy('id', 'DESC')
      ->paginate(10);
  
   
       $news_categories = NewsCategory::latest()->get();
       $colleges = Colleges::latest()->get();
   
       if ($request->ajax()) {
           return view('university.news.partials.news_list', compact('news_post'))->render();
       }
   
       return view('university.news.all_news', compact('news_categories', 'colleges', 'news_post'));
   }
   

   // Sankit Code ends here


}
