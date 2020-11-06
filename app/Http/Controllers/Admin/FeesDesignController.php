<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use\App\model\SchoolProfile;
use\App\model\Section;
use\App\model\Standard;
use\App\model\AcadamicYear;
use\App\model\AllotedStudent;
use App\model\StudentProfile;
use\App\model\Teacher;

class FeesDesignController extends Controller
{
    public function paid_fees(){
        return view('auth.fees.paid_fees');
    }
    public function pay_fees(){
        return view('auth.fees.pay_fees');
    }
    public function bonafide($id)
    {
        $name = StudentProfile::findorfail($id);
        $sec = Section::all(); 
        $std = Standard::where('id', $name->class_name)->first();
        $academicYear = AcadamicYear::all(); 
        return view('auth.certificate.bonafide-certificate',compact('std','sec','academicYear','name'));

    }
    public function character($id)
    {
        $name = StudentProfile::findorfail($id);
        $school= SchoolProfile::where('id', $name->school_name)->first();
        return view('auth.certificate.character-certificate',compact('name','school'));
    }
    public function leaving($id)
    {
        $name = StudentProfile::findorfail($id);
        $teacher = Teacher::where('id',$name->class_teacher_name)->first();
        $school= SchoolProfile::where('id', $name->school_name)->first();
        return view('auth.certificate.leaving-certificate',compact('name','school','teacher'));
    }

}
