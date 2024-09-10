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

class NewsController extends Controller
{




   public function news_info($slug)
   {
      $news = News::where('n_slug', $slug)->where('status', 1)->firstOrFail();
      return view('university.news.news_info', compact('news'));
   }

   public function all_news(Request $request)
   {
      // Check if 'clear_filters' parameter is present in the request
      if ($request->has('clear_filters')) {
         // Clear all filter session data
         session()->forget(['news_category', 'from_date', 'to_date', 'college_name']);
         $query = News::where('status', 1);
      } else {
         // Initialize query builder for news
         $query = News::where('status', 1);

         // Apply category filter if present
         if ($request->has('news_category') && $request->news_category != '') {
            $category = NewsCategory::find($request->news_category);
            if ($category) {
               $query->where('category', $category->category_name);
               session(['news_category' => $category->category_name]);
            }
         } else if (session()->has('news_category') && session('news_category') != '') {
            $query->where('category', session('news_category'));
         }

         // Apply college filter if present
         if ($request->has('college_name') && $request->college_name != '') {
            $collegeId = $request->college_name;
            $query->where('cd_id', $collegeId);
            session(['college_name' => $collegeId]);
         } else if (session()->has('college_name') && session('college_name') != '') {
            $collegeId = session('college_name');
            $query->where('cd_id', $collegeId);
         }

         // Date range filter
         $fromDate = $request->has('from_date') && $request->from_date != '' ? $request->from_date : session('from_date', null);
         $toDate = $request->has('to_date') && $request->to_date != '' ? $request->to_date : session('to_date', null);

         if ($fromDate) {
            $query->whereDate(DB::raw("STR_TO_DATE(CONCAT(event_day, '-', event_month, '-', event_year), '%d-%m-%Y')"), '>=', $fromDate);
            session(['from_date' => $fromDate]);
         }

         if ($toDate) {
            $query->whereDate(DB::raw("STR_TO_DATE(CONCAT(event_day, '-', event_month, '-', event_year), '%d-%m-%Y')"), '<=', $toDate);
            session(['to_date' => $toDate]);
         }
      }

      // Execute query with ordering by date and pagination
      $news_post = $query
         ->orderBy(DB::raw("STR_TO_DATE(CONCAT(event_day, '-', event_month, '-', event_year), '%d-%m-%Y')"), 'DESC')
         ->orderBy('id', 'DESC')
         ->paginate(10);

      $news_categories = NewsCategory::latest()->get();
      $colleges = Colleges::latest()->get();

      if ($request->ajax()) {
         return view('university.news.partials.news_list', compact('news_post'))->render();
      }

      return view('university.news.all_news', compact('news_categories', 'colleges', 'news_post'));
   }
}
