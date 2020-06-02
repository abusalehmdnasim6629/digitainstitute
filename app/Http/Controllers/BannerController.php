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

class BannerController extends Controller
{
    public function index(){
        $this->authcheck();
        return view('admin.add_banner');
    }

    public function save(Request $request)
    {
        $bn = array();
        $bn['text1'] = $request->t1;
        $bn['text2'] = $request->t2;

        if ($request->hasfile('logo') && $request->hasfile('b_image')) {

            $image = $request->file('logo');
            $image1 = $request->file('b_image');

            $image_name = Str::random(20);
            $image_name1 = Str::random(20);

            $ext = strtolower($image->getClientOriginalExtension());
            $ext1 = strtolower($image1->getClientOriginalExtension());

            $image_full_name = $image_name . '.' . $ext;
            $image_full_name1 = $image_name1 . '.' . $ext1;

            $upload_path = public_path() . '/image/';
            $image_url = 'image/' . $image_full_name;
            $image_url1 = 'image/' . $image_full_name1;

            $success = $image->move($upload_path, $image_full_name);
            $success1 = $image1->move($upload_path, $image_full_name1);


            if ($success && $success1) {
                $bn['logo_image'] = $image_url;
                $bn['banner_image'] = $image_url1;

                DB::table('banner')->insert($bn);
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
