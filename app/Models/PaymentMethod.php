<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    use HasFactory;
    protected $table = 'paymentMethod';
    protected $fillable = ['name','account_number','type'];
    protected $dates = ['created_at','updated_at'];

}
