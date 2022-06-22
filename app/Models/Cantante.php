<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cantante extends Model
{
    use HasFactory;
    protected $fillable = ['name','lastname','birthday'];
}
