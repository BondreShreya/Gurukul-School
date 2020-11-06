<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Siblings extends Model
{
    protected $table ="siblings";
    protected $fillable = [
        'name','section','class','percentage',
   ];
}
