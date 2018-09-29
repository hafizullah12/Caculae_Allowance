<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Result;
use App\Session;
use App\Semister;
use App\subject;
use DB;

class CalculationController extends Controller
{
    public function index()

    {
        $result = new Result();
        //session
        $session = DB::table('results')
        ->select('session_id')
        ->orderBy('id', 'desc')->limit(1)->first()->session_id;
        $session =  Session::find($session);
        $session = $session->name;
        //Semister
        $semister = DB::table('results')
        ->select('session_id')
        ->orderBy('id', 'desc')->limit(1)->first()->session_id;
        $semister =  Semister::find($semister);
        $semister = $semister->name;
        //subject
       $subject = DB::table('results')->select('id_subject')
       ->orderBy('id', 'desc')->limit(1)
       ->first()->id_subject;
       $subject = subject::find($subject);
       $subject_name = $subject->name;
       //course_code 
       $course_code = $subject->course_code;
       //Teacher Name
       $name = DB::table('results')->select('name')->orderBy('id', 'desc')->limit(1)
       ->first()->name;
       //CT_1 
       $ct_1 = DB::table('results')->select('ct_1')->orderBy('id', 'desc')->limit(1)
       ->first()->ct_1;
       $amount_of_ct_1 = $ct_1*150;
       //CT_2
       $ct_2 =  DB::table('results')->select('ct_2')->orderBy('id', 'desc')->limit(1)
       ->first()->ct_2;
       //amount of ct
       $amount_of_ct_2 = $ct_2*150;
       //ct_3
       $ct_3 = DB::table('results')->select('ct_3')->orderBy('id', 'desc')->limit(1)
       ->first()->ct_3;
       $amount_of_ct_3 = $ct_3*150;
       //question
       $question = DB::table('results')->select('question')->orderBy('id','desc')->limit(1)
       ->first()->question;
       $amount_of_question = $question*800;
       //Student_of_Final_exam
       $final_student =  DB::table('results')->select('final_student')->orderBy('id', 'desc')->limit(1)
       ->first()->final_student;
       //amount_of_final_exam
       $amount_of_final =   $final_student * 170;
       //Exam_committee
       $exam_committee = DB::table('results')->select('exam_committee')->orderBy('id', 'desc')->limit(1)
       ->first()->exam_committee;
       if( $exam_committee == 'chairman')
       {
           $rate = 120;
       }
       else if($exam_committee == 'member')
       {
           $rate = 100;
       }
       //Tabulation
       $tabulation = DB::table('results')->select('tabulation')->orderBy('id', 'desc')->limit(1)
       ->first()->tabulation;
       //Tabulation_rate
       $tabulation_rate = $tabulation*10;
       //Presentation
       $presentation = DB::table('results')->select('presentation')->orderBy('id', 'desc')->limit(1)
       ->first()->presentation;
       $amount_of_presentation = $presentation*2500;
       //Evalution
       $evalution = DB::table('results')->select('evalution')->orderBy('id', 'desc')->limit(1)
       ->first()->evalution;
       $amount_of_evalution = $evalution*3000;
       //sercetizing_sub
       $sercetizing_sub_1 = DB::table('results')->select('sercetizing_sub_1')->orderBy('id', 'desc')->limit(1)
       ->first()->sercetizing_sub_1;
        //sercetizing_student
       $sercetizing_student_1 = DB::table('results')->select('sercetizing_student_1')->orderBy('id', 'desc')->limit(1)
       ->first()->sercetizing_student_1;
       $amount_of_sercetizing_1 = $sercetizing_student_1*100;
       //Total 
       $total =   $amount_of_ct_1 +  $amount_of_ct_2 + $amount_of_ct_3+
       $amount_of_question + $amount_of_final +  $rate +  $tabulation_rate + 
       $amount_of_presentation + $amount_of_evalution +
        $amount_of_sercetizing_1;
        // return $total;
        return view('soft.result',[
            'session'=>$session,
            'semister'=>$semister, 
            'subject_name' =>$subject_name,
            'course_code'=>$course_code,
            'name'=> $name, 
            'ct_1'=>$ct_1,
            'amount_of_ct_1'=>$amount_of_ct_1,
            'ct_2'=>$ct_2,
            'amount_of_ct_2'=>$amount_of_ct_2,
            'ct_3'=>$ct_3,
            'amount_of_ct_3'=>$amount_of_ct_3,
            'question'=>$question,
            'amount_of_question' => $amount_of_question,
            'final_student'=>$final_student,
            'amount_of_final'=>$amount_of_final,
            'exam_committee'=>$exam_committee,
            'rate'=>$rate,
            'tabulation'=>$tabulation,
            'tabulation_rate'=>$tabulation_rate,
            'presentation'=>$presentation,
            'amount_of_presentation'=>$amount_of_presentation,
            'evalution'=>$evalution,
            'amount_of_evalution'=>$amount_of_evalution,
            'sercetizing_sub_1'=>$sercetizing_sub_1,
            'sercetizing_student_1'=>$sercetizing_student_1,
            'amount_of_sercetizing_1'=> $amount_of_sercetizing_1,
            'total'=>$total,
        ]);
    }
    
}
