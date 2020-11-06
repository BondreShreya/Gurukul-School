<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Standard;
use App\model\Classes;
use App\model\StudentProfile;
use App\model\SchoolProfile;
use App\model\AllotedStudent;
use App\model\AcadamicYear;
use App\model\Section;
use App\model\Alloted;

class StudentMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Alloted::all();
        $allotedStudent = AllotedStudent::all();
        $sec = Section::all();
        $std = Standard::all(); 
        $name = SchoolProfile::all(); 
        $academicYear = AcadamicYear::all(); 
        return view('auth.student_master.stu_master',compact('std','sec','academicYear','allotedStudent','name'));
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
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = AllotedStudent::findorfail($id);
        $users->delete();
        return redirect('stu_master')->with('success', 'Alloted List Deleted Successfully');
    }
}
