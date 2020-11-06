<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class UserAccount extends Model
{
    protected $table ="user_account";
    protected $fillable = [
        'name', 'email','password','password_confirmation','mobileNumber','userProfile','description',
   ]; 
}
