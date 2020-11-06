<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $table ="attendance";
    protected $fillable = [
        'class_name','acadamic_year', 'section','month','days',
   ];
}
