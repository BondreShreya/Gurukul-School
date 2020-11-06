<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class AllotedStudent extends Model
{
    protected $table ="alloted_student";
    protected $fillable = [
       'allotment_id','admission_id',
   ];
}
