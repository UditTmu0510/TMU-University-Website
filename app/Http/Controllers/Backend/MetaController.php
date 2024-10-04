<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Metas;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MetaController extends Controller
{
    public function AllMetas(Request $request)
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);
        $metas = Metas::orderBy('id','desc')->get();
        return view('admin.backend.pages.metas.all_metas',compact('profileData','metas'));

    }


    public function AddMeta(Request $request)
    {
        if($request->isMethod('post'))
        {
            try{

                $request->validate([
'page_name' => 'required',
'page_url' => 'required',
'meta_title' => 'required',
'meta_description' => 'required',
'meta_keywords'=> 'required',
'status'=>'required',
'priority'=>'required',
'no_index_status' => 'required'
                ]);

$page_url = $request->page_url;
$page_name = $request->page_name;
$meta_title = $request->meta_title;
$meta_description = $request->meta_description;
$meta_keywords = $request->meta_keywords;
$og_title = $request->og_title;
$og_site_name = $request->og_site_name;
$og_url = $request->og_url;
$og_description = $request->og_description;
$og_type = $request->og_type;
$og_image = $request->og_image;
$canonical_tag = $request->canonical_tag;
$image_alt_tag = $request->image_alt_tag;
$sitemap_url = $request->sitemap_url;
$disp_attribute_1 = $request->disp_attribute_1;
$disp_attribute_2 = $request->disp_attribute_2;
$no_index_status = $request->no_index_status;
$status = $request->status;
$priority = $request->priority;
$schema_markup = $request->schema_markup;
$slug1 = 'na';
$slug2 = 'na';
$slug3 = 'na';
$slug4 = 'na';
$slug5 = 'na';
$i = 1;
$parsed_url = parse_url($page_url);

if (isset($parsed_url['path'])) {
 $path = trim($parsed_url['path'], '/');
 $slugs = explode('/', $path);
 foreach ($slugs as $slug) {
  ${'slug' . $i} = $slug;
  $i++;
 }

}

$metaData = [
'page_name' => $page_name,
'slug1' => $slug1,
'slug2' => $slug2,
'slug3' => $slug3,
'slug4' => $slug4,
'slug5' => $slug5,
'meta_title' => $meta_title,
'meta_description' => $meta_description,
'meta_keywords'=> $meta_keywords,
'og_title' => $og_title,
'og_site_name' => $og_site_name,
'og_url' => $og_url,
'og_description' => $og_description,
'og_type'=>$og_type,
'og_image'=>$og_image,
'canonical_tag'=>$canonical_tag,
'image_alt_tag'=>$image_alt_tag,
'sitemap_url'=>$sitemap_url,
'disp_attribute_1' =>$disp_attribute_1,
'disp_attribute_2' =>$disp_attribute_2,
'status'=>$status,
'priority'=>$priority,
'schema_markup'=>$schema_markup,
'no_index_status' =>$no_index_status
];

$metas = Metas::create($metaData);
if($metas)
{
       
        Session::flash('success', 'Meta Added Successfully !');
}


            }catch(ValidationException $e){

                DB::rollBack();
                Session::flash('error','Validation Error in Adding Meta'.$e->getMessage());

            }catch(Exception $e)
            {
                DB::rollBack();
            Session::flash('error','Error in Adding Meta'.$e->getMessage());

            }

            return redirect()->route('all.metas');

        }else{
            $id = Auth::user()->id;
            $profileData = User::find($id);
            $max_id = Metas::max('id');
            $priority = $max_id + 1;
            return view('admin.backend.pages.metas.add_meta',compact('profileData','priority'));
         }   

    }


    public function DeleteMeta($id)
    {
        try{
            $meta = Metas::where('id',$id);
            $meta->delete();
            Session::flash('success','Meta deleted successfully');
            }catch(ModelNotFoundException $e)
            {
            Session::flash('error','Meta not found');
            }catch(\Exception $e)
            {
            Session::flash('error','Error in deleting meta');
            }
            return redirect()->route('all.metas');
    

    }

    public function CheckMetaUrl(Request $request)
    {
        if($request->ajax())
        {
            $url = $request->input('value');
$slug1 = 'na';
$slug2 = 'na';
$slug3 = 'na';
$slug4 = 'na';
$slug5 = 'na';
$i = 1;
$parsed_url = parse_url($url);

if (isset($parsed_url['path'])) {
    $path = trim($parsed_url['path'], '/');
    $slugs = explode('/', $path);
    foreach ($slugs as $slug) {
     ${'slug' . $i} = $slug;
     $i++;
    }
   
   }

   $result = Metas::where('slug1', $slug1)
   ->where('slug2', $slug2)
   ->where('slug3', $slug3)
   ->where('slug4', $slug4)
   ->where('slug5', $slug5)
   ->exists();

return response()->json(['exists' => $result]);



        }else{
            abort(404);
        }

    }

public function EditMeta(Request $request,$id)
{

    if($request->isMethod('post'))
    {
        try{

            $request->validate([
'page_name' => 'required',
'page_url' => 'required',
'meta_title' => 'required',
'meta_description' => 'required',
'meta_keywords'=> 'required',
'status'=>'required',
'priority'=>'required',
'no_index_status' => 'required'
            ]);
$meta_object = Metas::where('id',$id);
$page_url = $request->page_url;
$page_name = $request->page_name;
$meta_title = $request->meta_title;
$meta_description = $request->meta_description;
$meta_keywords = $request->meta_keywords;
$og_title = $request->og_title;
$og_site_name = $request->og_site_name;
$og_url = $request->og_url;
$og_description = $request->og_description;
$og_type = $request->og_type;
$og_image = $request->og_image;
$canonical_tag = $request->canonical_tag;
$image_alt_tag = $request->image_alt_tag;
$sitemap_url = $request->sitemap_url;
$disp_attribute_1 = $request->disp_attribute_1;
$disp_attribute_2 = $request->disp_attribute_2;
$no_index_status = $request->no_index_status;
$status = $request->status;
$priority = $request->priority;
$schema_markup = $request->schema_markup;
$slug1 = 'na';
$slug2 = 'na';
$slug3 = 'na';
$slug4 = 'na';
$slug5 = 'na';
$i = 1;
$parsed_url = parse_url($page_url);

if (isset($parsed_url['path'])) {
$path = trim($parsed_url['path'], '/');
$slugs = explode('/', $path);
foreach ($slugs as $slug) {
${'slug' . $i} = $slug;
$i++;
}

}

$metaData = [
'page_name' => $page_name,
'slug1' => $slug1,
'slug2' => $slug2,
'slug3' => $slug3,
'slug4' => $slug4,
'slug5' => $slug5,
'meta_title' => $meta_title,
'meta_description' => $meta_description,
'meta_keywords'=> $meta_keywords,
'og_title' => $og_title,
'og_site_name' => $og_site_name,
'og_url' => $og_url,
'og_description' => $og_description,
'og_type'=>$og_type,
'og_image'=>$og_image,
'canonical_tag'=>$canonical_tag,
'image_alt_tag'=>$image_alt_tag,
'sitemap_url'=>$sitemap_url,
'disp_attribute_1' =>$disp_attribute_1,
'disp_attribute_2' =>$disp_attribute_2,
'status'=>$status,
'priority'=>$priority,
'schema_markup'=>$schema_markup,
'no_index_status' =>$no_index_status
];

$metas = $meta_object->update($metaData);
if($metas)
{
   
    Session::flash('success', 'Meta Updated Successfully !');
}


        }catch(ValidationException $e){

            DB::rollBack();
            Session::flash('error','Validation Error in Updating Meta'.$e->getMessage());

        }catch(Exception $e)
        {
            DB::rollBack();
        Session::flash('error','Error in Updating Meta'.$e->getMessage());

        }

        return redirect()->route('all.metas');


    }else{

        $user_id = Auth::user()->id;
        $profileData = User::find($user_id);
        $meta = Metas::where('id',$id)->first();
        return view('admin.backend.pages.metas.edit_meta',compact('profileData','meta'));

    }

}


}
