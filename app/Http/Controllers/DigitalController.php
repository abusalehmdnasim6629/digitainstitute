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

class DigitalController extends Controller
{
    public function index(){
            
            

        $bn = DB::table('banner')
                ->first();
        $courses = DB::table('courses')
                ->select('courses.*')
                ->get(); 

        
        $conBan = DB::table('contentbanner')
                    ->where('header_id',1)
                    ->get();

        $couDes = DB::table('coursedes')
                    ->where('header_id',1)
                    ->get(); 

        $abCou = DB::table('aboutcourse')
                    ->where('header_id',1)
                    ->get();     
                    
        $enroll = DB::table('whoenroll')
                    ->where('header_id',1)
                    ->get(); 
                    
        $why = DB::table('whycourse')
                    ->where('header_id',1)
                    ->get();

        $struct = DB::table('coursestruct')
                    ->where('header_id',1)
                    ->get();

        Session::put('page','digital');
        return view('branding')->with('bn',$bn)
                               ->with('courses',$courses)
                               ->with('conBan',$conBan)
                               ->with('couDes',$couDes)
                               ->with('enroll',$enroll)
                               ->with('why',$why)
                               ->with('struct',$struct)
                               ->with('abCou',$abCou);

    
    
    
  }

  public function content(){
            
            

    $bn = DB::table('banner')
            ->first();
    $courses = DB::table('courses')
            ->select('courses.*')
            ->get(); 

    
    $conBan = DB::table('contentbanner')
                ->where('header_id',2)
                ->get();

    $couDes = DB::table('coursedes')
                ->where('header_id',2)
                ->get(); 

    $abCou = DB::table('aboutcourse')
                ->where('header_id',2)
                ->get();     
                
    $enroll = DB::table('whoenroll')
                ->where('header_id',2)
                ->get(); 
                
    $why = DB::table('whycourse')
                ->where('header_id',2)
                ->get();

   

    Session::put('page','content');
    return view('branding')->with('bn',$bn)
                           ->with('courses',$courses)
                           ->with('conBan',$conBan)
                           ->with('couDes',$couDes)
                           ->with('enroll',$enroll)
                           ->with('why',$why)
                           ->with('abCou',$abCou);



                        }


    public function seo(){
            
            

                            $bn = DB::table('banner')
                                    ->first();
                            $courses = DB::table('courses')
                                    ->select('courses.*')
                                    ->get(); 
                        
                            
                            $conBan = DB::table('contentbanner')
                                        ->where('header_id',3)
                                        ->get();
                        
                            $couDes = DB::table('coursedes')
                                        ->where('header_id',3)
                                        ->get(); 
                        
                            $abCou = DB::table('aboutcourse')
                                        ->where('header_id',3)
                                        ->get();     
                                        
                            $enroll = DB::table('whoenroll')
                                        ->where('header_id',3)
                                        ->get(); 
                                        
                            $why = DB::table('whycourse')
                                        ->where('header_id',3)
                                        ->get();
                        
                           
                        
                            Session::put('page','seo');
                            return view('branding')->with('bn',$bn)
                                                   ->with('courses',$courses)
                                                   ->with('conBan',$conBan)
                                                   ->with('couDes',$couDes)
                                                   ->with('enroll',$enroll)
                                                   ->with('why',$why)
                                                   ->with('abCou',$abCou);
                        
                        
         }
         public function social(){
            
            

            $bn = DB::table('banner')
                    ->first();
            $courses = DB::table('courses')
                    ->select('courses.*')
                    ->get(); 
        
            
            $conBan = DB::table('contentbanner')
                        ->where('header_id',4)
                        ->get();
        
            $couDes = DB::table('coursedes')
                        ->where('header_id',4)
                        ->get(); 
        
            $abCou = DB::table('aboutcourse')
                        ->where('header_id',4)
                        ->get();     
                        
            $enroll = DB::table('whoenroll')
                        ->where('header_id',4)
                        ->get(); 
                        
            $why = DB::table('whycourse')
                        ->where('header_id',4)
                        ->get();
        
           
        
            Session::put('page','social');
            return view('branding')->with('bn',$bn)
                                   ->with('courses',$courses)
                                   ->with('conBan',$conBan)
                                   ->with('couDes',$couDes)
                                   ->with('enroll',$enroll)
                                   ->with('why',$why)
                                   ->with('abCou',$abCou);
        
        
         }    

         public function facebook(){
            
            

            $bn = DB::table('banner')
                    ->first();
            $courses = DB::table('courses')
                    ->select('courses.*')
                    ->get(); 
        
            
            $conBan = DB::table('contentbanner')
                        ->where('header_id',5)
                        ->get();
        
            $couDes = DB::table('coursedes')
                        ->where('header_id',5)
                        ->get(); 
        
            $abCou = DB::table('aboutcourse')
                        ->where('header_id',5)
                        ->get();     
                        
            $enroll = DB::table('whoenroll')
                        ->where('header_id',5)
                        ->get(); 
                        
            $why = DB::table('whycourse')
                        ->where('header_id',5)
                        ->get();
        
           
        
            Session::put('page','facebook');
            return view('branding')->with('bn',$bn)
                                   ->with('courses',$courses)
                                   ->with('conBan',$conBan)
                                   ->with('couDes',$couDes)
                                   ->with('enroll',$enroll)
                                   ->with('why',$why)
                                   ->with('abCou',$abCou);
        
        
         }    
}
