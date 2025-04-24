<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = ['customer_name', 'email', 'phone', 'reservation_time', 'guest_count', 'status'];
}
