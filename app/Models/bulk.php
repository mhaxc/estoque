<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bulk extends Model
{
    use HasFactory;

    protected $fillable = ['slug','name'];
}
