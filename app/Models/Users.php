<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $fillable = ['name','email','password','phone','address','birthday','is_active','role'];
    protected $dates = ['created_at','updated_at'];
}
