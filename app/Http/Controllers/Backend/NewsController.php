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
$news = News::where('n_slug',$slug)->where('status',1)->firstOrFail();
return view('university.news.news_info',compact('news'));
}

public function all_news(){   
   $news_post = News::where('status',1)
   ->latest()
   ->orderBy('id', 'DESC')
   ->paginate(10);

   $news_categories = NewsCategory::latest()->get();
   $colleges = Colleges::latest()->get();
   return view('university.news.all_news',compact('news_categories','colleges','news_post'));

}


}
