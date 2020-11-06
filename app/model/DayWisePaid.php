<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class DayWisePaid extends Model
{
    protected $table ="daywise_paid";
    protected $fillable = [
       'date','class_name',
   ];
}
