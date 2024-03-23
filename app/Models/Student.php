<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'nrp',
        'name',
        'address',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
