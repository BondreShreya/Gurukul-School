<?php

namespace App\Http\Controllers\Admin;
use App\model\StudentProfile;
use App\model\SchoolProfile;
use App\model\AcadamicYear;
use App\model\Standard;
use App\model\Section;
use App\model\Teacher;
use App\User;
use App\Role;
use DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $users = StudentProfile::orderBy('id','ASC')->get();
        return view('auth.student_info.student_list',compact('users'));
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sec = Section::all();
        $std = Standard::all(); 
        $users = Teacher::all();
        $academicYear = AcadamicYear::all(); 
        $schooldetail = SchoolProfile::all(); 
        return view('auth.student_info.new_student_profile',compact('academicYear','schooldetail','std','sec','users'));
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
        'school_name' => 'required',
        'first_name' => 'required',
        'class_name' => 'required',
        
      ]);
        
        $student= new StudentProfile();
            $student->form_number= $request->form_number;
            $student->serial_id= $request->serial_id;
            $student->admission_number= $request->admission_number;
            $student->acadamic_year= $request->acadamic_year;
            $student->school_name= $request->school_name;
            $student->class_teacher_name= $request->class_teacher_name;
            $student->class_name= $request->class_name;
            $student->section = $request->sectionval;
            $student->admission_scheme= $request->admission_scheme;
            $student->admission_date= $request->admission_date;
            $student->first_name= $request->first_name;
            $student->middle_name= $request->middle_name;
            $student->last_name= $request->last_name;
            $student->religion= $request->religion;
            $student->category= $request->category;
            $student->cast= $request->cast;
            $student->place_of_birth= $request->place_of_birth;
            $student->mother_tongue= $request->mother_tongue;
            $student->gender= $request->gender;
             $image = $request->file('file');
            if($image != '')
            {
              $image_name = rand() . '.' . $image->getClientOriginalExtension();
              $image->move(public_path('studentImg'), $image_name);
            }
            // $student->file = $request->file;
            $student->date_of_birth= $request->date_of_birth;
            $student->father_name= $request->father_name;
            $student->father_contact= $request->father_contact;
            $student->mother_name= $request->mother_name;
            $student->mother_contact= $request->mother_contact;
            $student->address= $request->address;
            $student->guardian_name= $request->guardian_name;
            $student->guardian_name= $request->guardian_name;
            $student->guardian_address= $request->guardian_address;
            $student->previous_school= $request->previous_school;
            $student->previous_school_address= $request->previous_school_address;
            $student->previous_class_name= $request->previous_class_name;
            $student->medium_of_instruction= $request->medium_of_instruction; 
            $student->extra_curricular_activity= $request->extra_curricular_activity;
            $student->health_problem= $request->health_problem;
            $student->recogniser= $request->recogniser;
            $student->date_of_leaving= $request->date_of_leaving;
            $student->certificate= $request->certificate;
            $student->bonafide_certificate= $request->bonafide_certificate;
            $student->admission_fees_discount= $request->admission_fees_discount;
            $student->term_fees_discount= $request->term_fees_discount;
            $student->save();  

            return redirect('student_list')->with('success','Successfull Register');
    }

    public function StoreFile($request)
    {
        //if request has file
        if ($request->hasFile('file')) {
            //storing file
            $path = public_path().'/studentImg/';
            //upload new file
            $file = $request->file;
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);
            return $filename;
        }
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
        $sec = Section::all();
        $std = Standard::all(); 
        $users = Teacher::all();
        $academicYear = AcadamicYear::all(); 
        $schooldetail = SchoolProfile::all(); 
        $student=  StudentProfile::findorfail($id);
    // dd($student);
        return view('auth.student_info.edit_student_profile',compact('student','academicYear','schooldetail','std','sec','users'));
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
        $student= StudentProfile::findorfail($id);
            $student->form_number= $request->form_number;
            $student->serial_id= $request->serial_id;
            $student->admission_number= $request->admission_number;
            $student->acadamic_year= $request->acadamic_year;
            $student->school_name= $request->school_name;
            $student->class_teacher_name= $request->class_teacher_name;
            $student->class_name= $request->class_name;
            $student->section= $request->section;
            $student->admission_scheme= $request->admission_scheme;
            $student->admission_date= $request->admission_date;
            $student->first_name= $request->first_name;
            $student->middle_name= $request->middle_name;
            $student->last_name= $request->last_name;
            $student->religion= $request->religion;
            $student->category= $request->category;
            $student->cast= $request->cast;
            $student->place_of_birth= $request->place_of_birth;
            $student->mother_tongue= $request->mother_tongue;
            $student->gender= $request->gender;
            $image_name = $request->hidden_image;
            $image = $request->file('file');
            if($image != '')
            {
              $image_name = rand() . '.' . $image->getClientOriginalExtension();
              $image->move(public_path('studentImg'), $image_name);
            }
            // $student->file=$request->$image_name;
            $student->date_of_birth= $request->date_of_birth;
            $student->father_name= $request->father_name;
            $student->father_contact= $request->father_contact;
            $student->mother_name= $request->mother_name;
            $student->mother_contact= $request->mother_contact;
            $student->address= $request->address;
            $student->guardian_name= $request->guardian_name;
            $student->guardian_name= $request->guardian_name;
            $student->guardian_address= $request->guardian_address;
            $student->previous_school= $request->previous_school;
            $student->previous_school_address= $request->previous_school_address;
            $student->previous_class_name= $request->previous_class_name;
            $student->medium_of_instruction= $request->medium_of_instruction; 
            $student->extra_curricular_activity= $request->extra_curricular_activity;
            $student->health_problem= $request->health_problem;
            $student->recogniser= $request->recogniser;
            $student->date_of_leaving= $request->date_of_leaving;
            $student->certificate= $request->certificate;
            $student->bonafide_certificate= $request->bonafide_certificate;
            $student->admission_fees_discount= $request->admission_fees_discount;
            $student->term_fees_discount= $request->term_fees_discount;
            $student->update($request->all());
            $studentimg = StudentProfile::whereId($id)->update(['file' => $image_name]);
            return redirect('student_list')->with('success', 'Student Profile Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student=  StudentProfile::findorfail($id);
        $student->delete();
        return redirect('student_list')->with('success', 'Student Profile Deleted Successfully');
        
    }
}
