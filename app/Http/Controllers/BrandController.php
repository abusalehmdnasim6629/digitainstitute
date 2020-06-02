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

class BrandController extends Controller
{
        public function index(){
         
                $bn = DB::table('banner')
                ->first();
        $courses = DB::table('courses')
                ->select('courses.*')
                ->get(); 
    
        
        $conBan = DB::table('contentbanner')
                    ->where('header_id',7)
                    ->get();
    
        $couDes = DB::table('coursedes')
                    ->where('header_id',7)
                    ->get(); 
    
        $abCou = DB::table('aboutcourse')
                    ->where('header_id',7)
                    ->get();     
                    
        $enroll = DB::table('whoenroll')
                    ->where('header_id',7)
                    ->get(); 
                    
        $why = DB::table('whycourse')
                    ->where('header_id',7)
                    ->get();
    
       
    
        Session::put('page','brand');
        return view('branding')->with('bn',$bn)
                               ->with('courses',$courses)
                               ->with('conBan',$conBan)
                               ->with('couDes',$couDes)
                               ->with('enroll',$enroll)
                               ->with('why',$why)
                               ->with('abCou',$abCou);

        }

        public function employee(){
         
                $bn = DB::table('banner')
                ->first();
               $courses = DB::table('courses')
                ->select('courses.*')
                ->get(); 
    
        
        $conBan = DB::table('contentbanner')
                    ->where('header_id',8)
                    ->get();
    
        $couDes = DB::table('coursedes')
                    ->where('header_id',8)
                    ->get(); 
    
        $abCou = DB::table('aboutcourse')
                    ->where('header_id',8)
                    ->get();     
                    
        $enroll = DB::table('whoenroll')
                    ->where('header_id',8)
                    ->get(); 
                    
        $why = DB::table('whycourse')
                    ->where('header_id',8)
                    ->get();
    
       
    
        Session::put('page','employee');
        return view('branding')->with('bn',$bn)
                               ->with('courses',$courses)
                               ->with('conBan',$conBan)
                               ->with('couDes',$couDes)
                               ->with('enroll',$enroll)
                               ->with('why',$why)
                               ->with('abCou',$abCou);

        }

        public function personal(){
         
                $bn = DB::table('banner')
                ->first();
               $courses = DB::table('courses')
                ->select('courses.*')
                ->get(); 
    
        
        $conBan = DB::table('contentbanner')
                    ->where('header_id',9)
                    ->get();
    
        $couDes = DB::table('coursedes')
                    ->where('header_id',9)
                    ->get(); 
    
        $abCou = DB::table('aboutcourse')
                    ->where('header_id',9)
                    ->get();     
                    
        $enroll = DB::table('whoenroll')
                    ->where('header_id',9)
                    ->get(); 
                    
        $why = DB::table('whycourse')
                    ->where('header_id',9)
                    ->get();
    
       
    
        Session::put('page','personal');
        return view('branding')->with('bn',$bn)
                               ->with('courses',$courses)
                               ->with('conBan',$conBan)
                               ->with('couDes',$couDes)
                               ->with('enroll',$enroll)
                               ->with('why',$why)
                               ->with('abCou',$abCou);

        }
}
