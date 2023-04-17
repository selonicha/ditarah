<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KisahInspiratif extends Model
{
    use HasFactory;

    protected $table = 'kisah_inspiratif';
    public $incrementing = false;
    protected $fillable = [
        'id',
        'judul',
        'penulis',
        'penjelasan',
        'file',

    ];
}
