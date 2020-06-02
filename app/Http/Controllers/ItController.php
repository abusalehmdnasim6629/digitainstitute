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
class ItController extends Controller
{
    public function design(){
            
            

        $bn = DB::table('banner')
                ->first();
        $courses = DB::table('courses')
                ->select('courses.*')
                ->get(); 
    
        
        $conBan = DB::table('contentbanner')
                    ->where('header_id',10)
                    ->get();
    
        $couDes = DB::table('coursedes')
                    ->where('header_id',10)
                    ->get(); 
    
        $abCou = DB::table('aboutcourse')
                    ->where('header_id',10)
                    ->get();     
                    
        $enroll = DB::table('whoenroll')
                    ->where('header_id',10)
                    ->get(); 
                    
        $why = DB::table('whycourse')
                    ->where('header_id',10)
                    ->get();
    
       
    
        Session::put('page','design');
        return view('branding')->with('bn',$bn)
                               ->with('courses',$courses)
                               ->with('conBan',$conBan)
                               ->with('couDes',$couDes)
                               ->with('enroll',$enroll)
                               ->with('why',$why)
                               ->with('abCou',$abCou);
    
    
    
       }

       public function wordpress(){
            
            

        $bn = DB::table('banner')
                ->first();
        $courses = DB::table('courses')
                ->select('courses.*')
                ->get(); 
    
        
        $conBan = DB::table('contentbanner')
                    ->where('header_id',12)
                    ->get();
    
        $couDes = DB::table('coursedes')
                    ->where('header_id',12)
                    ->get(); 
    
        $abCou = DB::table('aboutcourse')
                    ->where('header_id',12)
                    ->get();     
                    
        $enroll = DB::table('whoenroll')
                    ->where('header_id',12)
                    ->get(); 
                    
        $why = DB::table('whycourse')
                    ->where('header_id',12)
                    ->get();
    
       
    
        Session::put('page','word');
        return view('branding')->with('bn',$bn)
                               ->with('courses',$courses)
                               ->with('conBan',$conBan)
                               ->with('couDes',$couDes)
                               ->with('enroll',$enroll)
                               ->with('why',$why)
                               ->with('abCou',$abCou);
    
    
    
       }
    
}
