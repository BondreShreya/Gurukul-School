<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table ="teacher_reg";
    protected $fillable = [
        'name', 'email','qualification','designation','file',
   ];
}
