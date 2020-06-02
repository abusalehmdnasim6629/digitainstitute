<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

use Hash;

use Session;

session_start();

class EventController extends Controller
{
    public function index(){
        $this->authcheck();
        return view('admin.add_event');
    }

    public function save(Request $request)
    {
        $ue = array();
        $ue['title'] = $request->title;
        $ue['date'] = $request->date;
        $ue['time'] = $request->time;
        $ue['cost'] = $request->cost;

        if ($request->hasfile('image')) {

            $image = $request->file('image');

            $image_name = Str::random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = public_path() . '/image/';
            $image_url = 'image/' . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);

            if ($success) {
                $ue['image'] = $image_url;
                DB::table('uevent')->insert($ue);
                return redirect()->back();
            }
        }
    }

    public function authcheck(){
        $admin_name =Session::get('name');
        if($admin_name){
          return;
        }else{
            return Redirect::to('/admin-login')->send();
        }


    }
}
