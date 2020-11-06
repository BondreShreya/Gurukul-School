<?php

namespace App\Http\Controllers\Admin;
use App\model\AcadamicYear;
use App\User;
use App\Role;
use DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AcadamicController extends Controller
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
        $students = AcadamicYear::all();
        return view('auth.setup.acadamic_year',compact('students'));
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
            'acadamic_year' => 'required',
            
            
        ]);

        $acadamicyear = new AcadamicYear();
            $acadamicyear->acadamic_year=$request->acadamic_year;
            $acadamicyear->previous_acadamic_year=$request->previous_acadamic_year;
            $acadamicyear->status=$request->status;
            $acadamicyear->description=$request->description;
            $acadamicyear->save();

            
      return redirect('acadamic_year_create')->with('success','Successfull Register');
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
        $students = AcadamicYear::findorfail($id);
        return view('auth.setup.edit_acadamic_year',compact('students'));

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
         $acadamicyear = AcadamicYear::findorfail($id);
            $acadamicyear->acadamic_year=$request->acadamic_year;
            $acadamicyear->previous_acadamic_year=$request->previous_acadamic_year;
            $acadamicyear->status=$request->status;
            $acadamicyear->description=$request->description;
            $acadamicyear->update($request->all());
        return redirect('acadamic_year_create')->with('success', 'Acadamic Year Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {       
            $acadamicyear=  AcadamicYear::findorfail($id);
            $acadamicyear->delete();
            return redirect('acadamic_year_create')->with('success', 'Acadamic Year Deleted Successfully');
    }
}
