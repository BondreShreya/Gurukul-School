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


class NewAllotedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sec = Section::all();
        $std = Standard::all();
        $users = Alloted::all();
        $students = AcadamicYear::all();
        return view('auth.new-allotment.allot-list',compact('users','students','sec','std',));

    }

    public function search(Request $request)
    {
        if($request->ajax())
        {
           $class = Standard::where('id',$request->classs)->first();
           $section = Section::where('id',$request->section)->first();
           $acadamic_year = AcadamicYear::where('id',$request->academicYear)->first();
           $admission = StudentProfile::where('class_name',$class->id)->where('acadamic_year',$acadamic_year->id)->where('section',$section->id)->where('status',0)->get();  
        //    dd($class);
           // declare an empty array for output
            $output = '';
            if (count($admission)>0)
           
              {
                 // concatenate output to the array
                 // loop through the result array
                 foreach ($admission as $key => $row)
                {
                     $school = SchoolProfile::where('id', $row->school_name)->first();
                     $std = Standard::where('id', $row->class_name)->first();
                     $sec = Section::where('id', $row->section)->first();
                     $acadamic= AcadamicYear::where('id', $row->acadamic_year,$row->previous_acadamic_year)->first();
                    
                     $output .= '<tr>'.
                     '<td>'.'<input type="checkbox" value="'.$row->id.'" name="admission_id" class="checkvalue"></td>'.
                     '<td>'.$std->standard.'</td>'.
                     '<td>'.$sec->section.'</td>'.
                     '<td>'.$row->first_name.'&nbsp;'.$row->middle_name.'&nbsp;'.$row->last_name.'</td>'.
                     '<td>'.$school->school_name.'</td>'.
                     '<td>'.$acadamic->previous_acadamic_year.'-'.$acadamic->acadamic_year.'</td>'.
                     '</tr>';

                }}
                    else 
                    {
                        // if there's no matching results according to the input
                        $output .= 'No results';
                    }
                    // return output result array
                    return $output;
                    // end of output

            }
        }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sec = Section::all();
        $academicYear = AcadamicYear::all();
        $std = Standard::all();
        return view('auth.new-allotment.new-allot', compact('sec','std','academicYear'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->ajax())
        {
            $alloted = Alloted::where('class_name', $request->course)
            ->where('section', $request->section)->where('acadamic_year', $request->acadmic_year)->first();
            if(empty($alloted))
            {
                $alloted = new Alloted();
                $alloted->class_name = $request->course;
                $alloted->section = $request->section;
                $alloted->acadamic_year = $request->acadmic_year;
                $alloted->save();
            }
           
           $admission = $request->admission;
        
              
            for($i=0; $i<count($admission); $i++)
            {
                $allot = AllotedStudent::where('allotment_id',$alloted->id)->where('admission_id',$admission[$i])->first();
                if (empty($allot)){
                    $allot=new AllotedStudent();
                    $allot->allotment_id = $alloted->id;
                    $allot->admission_id= $admission[$i];
                    $allot->save();
                   $changeadmission = StudentProfile::where('id',$admission[$i])->update(['status'=>1]);
    
                }
            }
            
        }
    }
    public function print($id)
    {
        $allotment = Alloted::findorfail($id);
        $allotstudent = AllotedStudent::where('allotment_id',$allotment->id)->get();
        $output = '';
        $output .= '<div class="container">'. 
        '<table class="table" style="border-collapse: collapse;width:100%";font-family: arial, sans-serif;>'. 
        '<tr style="background-color: #dddddd;">'. 
        '<th style="border: 1px solid black;padding: 10px">Sr No</th>' .
        '<th style="border: 1px solid black;padding: 10px">Student Name</th>'. 
        '<th style="border: 1px solid black;padding: 10px">School Name</th>'. 
        '<th style="border: 1px solid black;padding: 10px">Class</th>'. 
        '<th style="border: 1px solid black;padding: 10px">Section</th>'. 
        '<th style="border: 1px solid black;padding: 10px">Acadamic Year</th>'. 
        '</tr>';
        foreach($allotstudent as $key=> $a)
        {
            $admission = StudentProfile::where('id',$a->admission_id)->first();
            $class = Standard::where('id',$admission->class_name)->first();
            $section =Section::where('id',$admission->section)->first();
            $acadamic_year = AcadamicYear::where('id',$admission->acadamic_year)->first();
            $school = SchoolProfile::where('id', $admission->school_name)->first();
            $output .= '<tr>'.
                      '<td style="border: 1px solid black;
                      padding: 10px;text-align: center">'.++$key.'</td>'.
                      '<td style="border: 1px solid black;
                      padding: 10px;text-align: center">'.$admission->first_name.' '.$admission->middle_name.' '.$admission->last_name.'</td>'.
                      '<td style="border: 1px solid black;
                      padding: 10px;text-align: center">'.$school->school_name.'</td>'.
                      '<td style="border: 1px solid black;
                      padding: 10px;text-align: center">'.$class->standard.'</td>'. 
                      '<td style="border: 1px solid black;
                      padding: 10px;text-align: center">'.$section->section.'</td>'. 
                      '<td style="border: 1px solid black;
                      padding: 10px;text-align: center">'.$acadamic_year->previous_acadamic_year.' '.$acadamic_year->acadamic_year.' </td>'.
                     '</tr>';

        }
        $output .= '</table>'.'</div>';
        return $output;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $class = Alloted::findorfail($id);
        $allotedStudent = AllotedStudent::where('allotment_id', $class->id)->get();
        $sec = Section::all();
        $std = Standard::all(); 
        $name = SchoolProfile::all(); 
        $academicYear = AcadamicYear::all(); 
        return view('auth.new-allotment.view-allot',compact('class','std','sec','academicYear','allotedStudent','name'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         
        $allotment = Alloted::findorfail($id);
        // dd($class);
        $allotedStudent = AllotedStudent::where('allotment_id', $allotment->id)->get();
        // dd($allotedStudent);
        $sec = Section::all();
        $std = Standard::all(); 
        $name = SchoolProfile::all(); 
        $academicYear = AcadamicYear::all();
        return view('auth.new-allotment.edit-allot',compact('allotment','std','sec','academicYear','allotedStudent','name'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if($request->ajax())
        {
        // $admission_id = StudentProfile::where('id',$request->admission)->first();
           $allotment_id = Alloted::where('id',$request->allotment_id)->first();
          
           $allotstudent = AllotedStudent::where('allotment_id',$allotment_id->id)->get();  
           $admission = $request->admission;
          
            foreach ($allotstudent as $key => $row)
            {
                $updatestudent = AllotedStudent::where('allotment_id', $request->allotment_id)->where('allotment_id',in_array($row->admission_id,$admission))->first();
                   
                if(!in_array($row->admission_id, $admission))
                {
                    $deletestudent = AllotedStudent::where('allotment_id', $request->allotment_id)->where('admission_id', $row->admission_id)->first();
                    $changestudent = StudentProfile::where('id',$deletestudent->admission_id)->update(['status'=>0]);
                    $deletestudent->delete();
                }
            }

        }
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users= Alloted::findorfail($id);
        $users->delete();
        return redirect('alloted_list')->with('success', 'Student Alloted Deleted Successfully');

    }
}
