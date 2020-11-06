<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class AcadamicYear extends Model
{
    protected $table ="acadamic_year";
    protected $fillable = [
        'acadamic_year', 'previous_acadamic_year','status','description',
   ];
}
