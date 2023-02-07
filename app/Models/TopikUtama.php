<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopikUtama extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'penjelasan',
        'file',
    ];
}
