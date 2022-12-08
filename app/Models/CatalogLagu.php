<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatalogLagu extends Model
{
    use HasFactory;

    protected $table = 'catalog_lagus';

    protected $fillable = [
        'cover_atwork', 'no', 'title', 'artis_name', 'genre', 'sub_genre', 'record_label', 'produced_by',
        'production_year', 'first_release_date', 'release_date', 'lyric_language', 'lyric_url', 'description', 'status'
    ];
}
