<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Fees extends Model
{
    protected $table ="fees";
    protected $fillable = [
        'fees_head','acadamic_year','class_name','school_name','amount','description',
   ];
}
