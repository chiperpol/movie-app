<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $table = 'master_genre';
    protected $fillable = ['nama_negara', 'status'];
    public $timestamps = true;
}
