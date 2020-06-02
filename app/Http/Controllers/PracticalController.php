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
class PracticalController extends Controller
{
    public function index(){
        $this->authcheck();
        return view('admin.add_practicalContent');
    }

    public function save(Request $request){

        $pc = array();
        $pc['Content'] = $request->content;
       

        DB::table('practical')
           ->insert($pc);

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
