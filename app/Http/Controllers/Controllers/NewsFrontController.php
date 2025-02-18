<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Support\Str;


class NewsFrontController extends Controller
{
    //
public function news_info($slug)
{

$news = News::where('n_slug',$slug)->where('status','Y')->firstOrFail();
$news_id = $news->id();
return view('university.news.news_info',compact('news'));
}




 
}
