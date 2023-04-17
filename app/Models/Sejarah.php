<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sejarah extends Model
{
    use HasFactory;

    protected $table = 'sejarah';
    public $incrementing = false;
    protected $fillable = [
        'id',
        'judul',
        'penulis',
        'penjelasan',
        'file',

    ];
}
