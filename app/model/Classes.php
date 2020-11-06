<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $table ="class";
    protected $fillable = [
        'standard','section','class_tech',
   ];
}
