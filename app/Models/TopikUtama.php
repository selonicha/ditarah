<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopikUtama extends Model
{
    use HasFactory;

    protected $table = 'topik_utama';
    protected $fillable = [
        'judul',
        'penulis',
        'penjelasan',
        'file',

    ];
}
