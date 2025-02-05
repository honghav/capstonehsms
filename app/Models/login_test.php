<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class login_test extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'age',
    ];
}
