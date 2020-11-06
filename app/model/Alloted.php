<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Alloted extends Model
{
    protected $table ="alloted";
    protected $fillable = [
       'class_name','section','acadamic_year',
   ];
}
