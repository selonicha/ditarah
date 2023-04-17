<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalonAdmin extends Model
{
    use HasFactory;

    protected $table = 'calon_admin';
    protected $fillable = [
        'nama',
        'email',
        'password',

    ];
}
