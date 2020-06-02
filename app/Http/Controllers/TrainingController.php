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

class TrainingController extends Controller
{
    public function index(){
        $this->authcheck();
        return view('admin.add_trainingCategory');
    }

    public function save(Request $request)
    {
        $tc = array();
        $tc['title'] = $request->title;
        $tc['description'] = $request->des;

        if ($request->hasfile('image')) {

            $image = $request->file('image');

            $image_name = Str::random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = public_path() . '/image/';
            $image_url = 'image/' . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);

            if ($success) {
                $tc['image'] = $image_url;
                DB::table('trainingcategory')->insert($tc);
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
