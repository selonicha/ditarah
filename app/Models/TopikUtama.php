<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopikUtama extends Model
{
    use HasFactory;

    protected $table = 'topik_utama';
    public $incrementing = false;
    protected $fillable = [
        'id',
        'judul',
        'penulis',
        'penjelasan',
        'file',

    ];
}
