<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Request;

class User extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'users';
    protected $fillable = ['firstname,lastname,date_of_birth,img,sex,social,email,password'];
    public $timestamps = true;

}
