<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // public $timestamps = flase;
    protected $fillable = [
        'name',
        'gender',
        'birthdate',
        'address',
        'base_salary',
        'total_salary',
    ];
}
