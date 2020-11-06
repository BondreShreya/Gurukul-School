<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\SchoolProfile;
use App\model\AcadamicYear;
use App\model\Standard;
use App\model\Section;
use App\model\Attendance;

class NewAttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Attendance::all();
        return view('auth.attendance.attendance-master',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $std = Standard::all();
        $sec = Section::all();
        $academicYear = AcadamicYear::all(); 
        $schooldetail = SchoolProfile::all();
        return view('auth.attendance.new-attendance',compact('academicYear','schooldetail','std','sec'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user= new  Attendance();    
            $user->class_name= $request->class_name;
            $user->section= $request->section;
            $user->acadamic_year= $request->acadamic_year;
            $user->month= $request->month;
            $user->days= $request->days;
            $user->save();  

            return redirect('attendance-master')->with('success','Successfull Register');
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
        $user=Attendance::findorfail($id);
        $user->delete();
        return redirect('attendance-master')->with('success', 'Deleted Successfully');
    }
}
