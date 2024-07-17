<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'identification',
        'address',
        'phone',
        'observation',
        'padrinho',
        'madrinha',
        'file_path',
        'status',
    ];
}