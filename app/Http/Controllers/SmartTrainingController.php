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
class SmartTrainingController extends Controller
{
    public function index(){
        $this->authcheck();
        return view('admin.add_SmartTraining');
    }

    public function save(Request $request){

           $st = array();
           $st['title'] = $request->title;
           $st['description1'] = $request->des1;
           $st['description2'] = $request->des2;

           DB::table('smarttraining')
              ->insert($st);

           return redirect()->back();   

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
