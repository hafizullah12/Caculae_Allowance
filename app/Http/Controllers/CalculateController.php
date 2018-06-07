<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use PDF;
use App\Session;
use App\Factor;
use DB;
use App\Amount;


class CalculateController extends Controller
{
    public function index()
    {
        
        $sessions = Session::all();
        $factors = Factor::all();
        $semisters = DB::table('semisters')->pluck("name","id")->all();
        return view('soft.create',['semisters'=>$semisters,'sessions'=>$sessions,'factors'=>$factors]);
    }

    public function selectAjax(Request $request)
    {
    	if($request->ajax()){
    		$subjects = DB::table('subjects')->where('id_semister',$request->id_semister)->pluck("name","id")->all();
    		$data = view('soft.ajax-select',compact('subjects'))->render();
    		return response()->json(['options'=>$data]);
    	}
    }

    public function store(Request $request)
    {
      
       

    
        $name  = $request->name;
        $session = $request->session_id;
        $students = Session::find($session); //fetch all value against id 
        $session = $students->name;
        $students_no = $students->students; //only single value 
        $semister_id = $request->id_semister;
        $course = DB::table('subjects')->find($semister_id);
        $course_code =  $course->course_code; 
    
       
        $factor = $request->factor;
        $rate = $request->rate;
        if(count($factor)> count($rate))
        $count = count($rate);
        else
        $count = count($factor);
        $total = 0;
        for($i=0;$i<$count;$i++)
        {
       echo $rate[$i];
            echo $factor[$i].'x'.$rate[$i].'<br>';
            $single = $factor[$i]*$rate[$i]*$students_no ;
             $total= $total+$single;
        }
       echo $total;
      
       
      

       


       
        

      

         
        





   
    }//end of function 

  


    
} //end of class

