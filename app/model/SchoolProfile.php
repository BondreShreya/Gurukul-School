<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class SchoolProfile extends Model
{
    protected $table ="school_profile";
    protected $fillable = [
        'society_name', 'society_reg_no','society_address','so_city','so_taluka','so_district','so_state','so_country','so_zip_code',
        'school_name', 'school_address', 'file','school_city','school_taluka','school_district','school_state','school_country','school_zip_code', 'school_type',
        'serial_number', 'genral_reg_no', 'school_recog_no', 'udise_no', 'affiliation_name', 'gr_number', 'medium', 'board',
        'contact_number', 'email', 'website',

 
    ];
}
    

        