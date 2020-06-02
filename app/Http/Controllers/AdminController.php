<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Hash;

use Session;

session_start();

class AdminController extends Controller
{
    public function index(){
        $this->authcheck();
        return view('admin.admin_home');
    }

    public function login(){

        return view('admin.admin_login');
    }

    public function registration(){

        return view('admin.admin_register');
    }

    public function save(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'password' => 'required|min:8',
            
    
    
          ]);
    
          if ($validator->fails()) {
            $errors = $validator->errors();
            return redirect()
              ->back()
              ->withErrors($validator);
        }
        $ad = array();
        $ad['name'] = $request->name;
        $ad['email'] = $request->email;
        $ad['password'] = md5($request->password);
        $ad['text_password'] = $request->password;
       
        $check = DB::table('admin')
                    ->where('email',$request->email)
                    ->count();

        if(!$check)
         {
                if($request->password == $request->cpassword){
                $regex = "/^(?=.*[$%^&]).*$/";

                if(preg_match($regex,$request->cpassword)){ 
                    
                    DB::table('admin')
                        ->insert($ad);
                
                        return Redirect::to('/admin-login');

                }else{
                    Session::put('er','Password must contain one of $, %, ^, &');
                    return redirect()->back();
                }
                    
                }else{
                    Session::put('mt','Password not matched');
                    return redirect()->back();

                }
         }else{
            Session::put('ch','Account has already been created with this email.Email must be unique');
            return redirect()->back();
         }      

    }


    public function login_check(Request $request){
       

       $l_c = DB::table('admin')
            ->where('email',$request->email)
            ->first();

        if( $l_c){

            if($l_c->password == md5($request->password))
            {
                Session::put('name',$l_c->name);
                return Redirect::to('/admin');
            }else{

                Session::put('ps','Password is incorrect');
                return Redirect()->back();
            }
        }else{

            Session::put('em','Email is incorrect');
            return Redirect()->back();
        }     

    }

    public function logout(){

        Session::flush();
        return Redirect::to('/admin-login');
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
