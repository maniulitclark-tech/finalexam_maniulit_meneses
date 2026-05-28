<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Factories\HasFactory;

class student extends Model
{
    use hasfactory;
    protected $table='student';
    protected $fillable=[
        'fname',
        'mname',
        'lname',
        'address',
        'dob',
        'contact'
    ];
}
