<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    use HasFactory;

    protected $table = 'movies';
    protected $primaryKey = 'id';
    public $timestamps = true;

    public function negara()
    {
        return $this->belongsTo(Negara::class, 'negara_id', 'id');
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class, 'genre_id', 'id');
    }

    public function quality()
    {
        return $this->belongsTo(Quality::class, 'quality_id', 'id');
    }
}
