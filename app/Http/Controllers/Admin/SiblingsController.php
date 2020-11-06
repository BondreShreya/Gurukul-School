<?php

namespace App\Http\Controllers\Admin;
use App\model\Siblings;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiblingsController extends Controller
{
    function index()
    {
        return view('auth.student_info.new_student_profile');
    }

    public function insert(Request $request)
    {
        if($request->ajax()){
        $siblings = new Siblings();
        $siblings->name=$request->sibname;
        $siblings->class=$request->sibclass;
        $siblings->section=$request->sibsection;
        $siblings->percentage=$request->sibpercentage;
        $siblings->save();
        dd($siblings);
        }
    }
}    

