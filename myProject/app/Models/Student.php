<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
   // public $timestame= failse;
    protected $fillable = [
        'name',
        'age',
        'address',
    ];

}
