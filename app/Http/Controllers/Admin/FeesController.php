<?php

namespace App\Http\Controllers\Admin;
use App\model\Fees;
use App\model\Fees_Head;
use App\model\SchoolProfile;
use App\model\AcadamicYear;
use App\model\Standard;
use App\model\Section;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class FeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = fees::all();
        $fees = Fees_Head::all();
        $std = Standard::all(); 
        $academicYear = AcadamicYear::all(); 
        $schooldetail = SchoolProfile::all(); 
        return view('auth.fees.addfees',compact('users','academicYear','schooldetail','std','fees'));
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
            'fees_head' => 'required',
            
            
        ]);

        $users = new Fees();
        $users->fees_head=$request->fees_head;
        $users->acadamic_year=$request->acadamic_year;
        $users->class_name=$request->class_name;
        $users->school_name=$request->school_name;
        $users->amount=$request->amount;
        $users->description=$request->description;
        $users->save();
        return redirect('addfees')->with('success','Successfull Register');
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
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $users = Fees::findorfail($id);
      $users->delete();
      return redirect('addfees')->with('success','Fees Deleted Successfully');
     
    }
}

