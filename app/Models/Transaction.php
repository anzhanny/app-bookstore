<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $table = 'transaction';
    protected $fillable = ['buyer_id','book_id','payment_method_id','qty','price','ppn','discount','total_payment','status'];
    protected $dates = ['created_at','updated_at'];

}
