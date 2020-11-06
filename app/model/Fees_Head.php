<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Fees_Head extends Model
{
    protected $table ="fees_head";
    protected $fillable = [
        'fees_head','description',
   ];
}
