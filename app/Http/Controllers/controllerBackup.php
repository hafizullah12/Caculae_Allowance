<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use PDF;
use App\Session;
use App\Factor;
use DB;


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

        
        $factors = input::get('factor');
        foreach($factors as $factor)
        {
         echo "How Much Factor". $factor.'</br>';
        }
        

        $factor_id = input::get('factor_id'); 
    
             
             //$total = 0;
             //$factor =0;  
            foreach($factor_id as $factor_id)
            {
        //    $rate = DB::table('factors')->where('id',$factor_id)
        //    ->select('rate')
        //    ->get();

       // $rate = Factor::find($factor_id);
        
            // $rate = $rate->rate;
           

            echo "factor_id".$factor_id.'</br>';

            
           // echo "Rate".$rate->rate;

               
                
      
                // $amount = $rate->rate*$students_no*$factor;
                // $total = $total + $amount;
              // echo $total;

                //echo $factor;


        //}
                  

    }
   // $factor =0;   
        //echo "id". $data2;

       
      
        // echo  $students->students;
        // echo  $semister_id ; 
        // echo   $course_code;
        //echo gettype($students);
        // $no_of_ct = $request->ct;
        // $no_of_term_final = $request->term_final;

        // $tk_of_ct =  $no_of_ct*1000*$students_no;
        // $tk_of_term_final = $no_of_term_final*1500*$students_no;


        // $total =   $tk_of_ct +    $tk_of_term_final;
        // $data = 
        // [
        //     'name'=>$name,
        //     'session'=>$session,
        //     'students_no'=>$students_no,
        //     'course_code'=>$course_code,
        // ];
        //return $data;


        // view()->share('name',$name,'total',$total);
        // //view()->share('data',$data);
        
       
        // PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        // $pdf = PDF::loadView('soft.result',['name'=>$name,'total'=>$total]);
        // return $pdf->stream('result.pdf');
       
        // return view('soft.result');
    }


    
}

