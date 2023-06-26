<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donorform extends Model
{
    use HasFactory;
    protected $fillable = [
        'Name',
        'Email',
        'Age',
        'Address',
        'Group',
    ];
}
