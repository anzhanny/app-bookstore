<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paymentmethod extends Model
{
    use HasFactory;
    protected $table = 'paymentmethod';
    protected $fillable = ['name','account_number','type'];
    protected $dates = ['created_at','updated_at'];

}
