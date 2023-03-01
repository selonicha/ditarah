<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrendingIsu extends Model
{
    use HasFactory;

    protected $table = 'trending_isu';
    protected $fillable = [
        'judul',
        'penulis',
        'penjelasan',
        'file',

    ];
}
