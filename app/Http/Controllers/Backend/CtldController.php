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

class CtldController extends Controller
{

   public function ctld_events()
   {
      $events = News::where('status', 1)
         ->where('cd_id', 21)
         ->orderBy('id', 'DESC')
         ->paginate(10);
         
         foreach ($events as $event) {
            $event->event_title = html_entity_decode($event->event_title);
         }

      return view('university.ctld.ctld_events', compact('events'));
   }

}