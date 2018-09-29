<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Result;

class ResultController extends Controller
{
    public function store(Request $request)
    {
        $result = new Result();
        $result->session_id = $request->session_id;
        $result->id_semister = $request->id_semister;
        $result->id_subject = $request->id_subject;
        $result->name = $request->name;
        $result->ct_1 = $request->ct_1; 
        $result->ct_2 = $request->ct_2; 
        $result->ct_3 = $request->ct_3; 
        $result->question = $request->question;
        $result->final_student = $request->final_student;
        $result->exam_committee = $request->exam_committee;
        $result->tabulation = $request->tabulation;
        $result->presentation = $request->presentation;
        $result->evalution = $request->evalution;
        $result->sercetizing_sub_1 = $request->sercetizing_sub_1;
        $result->sercetizing_student_1 = $request->sercetizing_student_1;
        $result->sercetizing_sub_2 = $request->sercetizing_sub_2;
        $result->sercetizing_student_2 = $request->sercetizing_student_2;
        $result->sercetizing_sub_3 = $request->sercetizing_sub_3;
        $result->sercetizing_student_3 = $request->sercetizing_student_3;
        $result->save();
        return redirect('/show');
    }
}
