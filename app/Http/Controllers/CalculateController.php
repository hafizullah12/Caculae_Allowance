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
        
        
 

      
        $factors = input::get('factor');
        $factor_id = input::get('factor_id'); 
       
         
      
      
          foreach($factors as $factor)
           {
              
              foreach($factor_id as $factor_id)
            {
               
                echo "factor_id".$factor_id.'</br>';
                
            }
            echo "How Much Factor". $factor.'</br>';
            
            }

        
         
        





   
    }//end of function 


    
} //end of class

