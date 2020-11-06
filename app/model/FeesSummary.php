<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class FeesSummary extends Model
{
    protected $table ="fees_summary";
    protected $fillable = [
        'form_date','to_date','class_name',
   ];
}
