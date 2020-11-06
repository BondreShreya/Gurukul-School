<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class StudentProfile extends Model
{
    protected $table ="student_profile";
    protected $fillable = [
        'form_number', 'serial_id','admission_number','acadamic_session','school_name','class_teacher_name','class_name','section','admission_scheme','admission_date',
        'contact_number', 'email','website', 'certificate', 'bonafide_certificate',
        'previous_school', 'previous_school_address', 'previous_class_name', 'medium_of_instruction', 'extra_curricular_activity', 'health_problem', 'recogniser', 'date_of_leaving',
        'admission_fees_discount', 'term_fees_discount', 'guardian_name', 'guardian_address',
        'father_name','father_contact','mother_name','mother_contact','address',
        'first_name', 'middle_name','last_name','religion','category','cast','place_of_birth','mother_tongue','gender','file','date_of_birth',
   ];
}
