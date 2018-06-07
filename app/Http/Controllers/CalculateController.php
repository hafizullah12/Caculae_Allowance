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
      
       

         $factors = $request->factor;
         $factor_id = $request->factor_id;
         //$count = count($factors);
        // dd($factors,$factor_id,$count);
        
        if(count($factors)>count($factor_id))
        $count = count($factor_id);
        else $count = count($factors);

        for($i=0;$i<$count;$i++)
        {
           // echo $i;
            $amount = new Amount();
            $amount->factor = $factors[$i];
            $amount->factor_id = $factor_id[$i];
            $amount->save();
            return 'ok';

            
        }

       


       
        

      

         
        





   
    }//end of function 

    public function Data()
    {

        $factor_id = Amount::all();
        return $factor_id;
    }


    
} //end of class

