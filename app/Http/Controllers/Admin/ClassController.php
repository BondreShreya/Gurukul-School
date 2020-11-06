<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Classes;
use App\model\Standard;
use App\model\Section;
use App\model\Teacher;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $std = Standard::all();
        $sec = Section::all();
        $users = Teacher::all();
        $student = Classes::all();
        return view('auth.class.index', compact('std','sec','users','student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'standard' => 'required',
           
        ]);
       
        $class = new Classes();
        $class->standard = $request->standard;
        $class->section = $request->section;
        $class->class_tech= $request->class_tech;
        $class->save();
        return redirect('/class')->with('success', 'Class Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $class = Classes::findorfail($id);
        $teacher = Teacher::all();
        $std = Standard::all();
        $sec = Section::all();
        return view('auth.class.edit_class', compact('std','sec','teacher','class'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $class = Classes::findorfail($id);
        $class->standard=$request->standard;
        $class->section=$request->section;
        $class->class_tech=$request->class_tech;
        $class->update($request->all());
        return redirect('/class')->with('success', 'Class Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      
        $user = Classes::findorfail($id);
        $user->delete();
        return redirect('/class')->with('success', 'Class Deleted Successfully!');
    }
}
