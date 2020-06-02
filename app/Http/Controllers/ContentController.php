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

class ContentController extends Controller
{
    public function getContent(){
       
        $st = DB::table('smarttraining')
                ->first();
        
        $tc = DB::table('trainingcategory')
                ->get();

        
        
        $nOr = DB::table('practical')
                ->count();
       
        $OT =  (int)$nOr/3; 
        $i=0;
        $oTpC1 = DB::table('practical')
                ->select('practical.*')
                ->limit($OT)
                ->get();
               
                $lastValue1 = 0;      
                foreach($oTpC1 as $pc){
                
                        if(++$i == $OT) {
                                $lastValue1 =$pc->id;
                        }
                
                }
                //return $lastValue1;
        $oTpC2 = DB::table('practical')
                ->where('id','>',$lastValue1)
                ->select('practical.*')
                ->limit($OT)
                ->get();
                  
        
                $lastValue2 = 0;      
                foreach($oTpC2 as $c){
                       
                        if(++$i == $OT+$OT) {
                                $lastValue2 = $c->id;
                               
                        }
                 
                }
               
        $oTpC3 = DB::table('practical')
                ->where('id','>',$lastValue2)
                ->select('practical.*')
                ->limit($OT)
                ->get();        

        
        $courses = DB::table('courses')
                ->select('courses.*')
                ->get(); 
            
       
        $bn = DB::table('banner')
                ->first();

        $ue = DB::table('uevent')
                ->first();

        return view('welhome')->with('st',$st)
                          ->with('tc',$tc)
                          ->with('oTpC1',$oTpC1)
                          ->with('oTpC2',$oTpC2)
                          ->with('oTpC3',$oTpC3)
                          ->with('courses',$courses)
                          ->with('bn',$bn)
                          ->with('ue',$ue);        






    }
}
