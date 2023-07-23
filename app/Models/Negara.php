<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Negara extends Model
{
    protected $table = 'master_negara';

    protected $fillable = ['nama_negara', 'status'];

    public $timestamps = true;

    use HasFactory;
}
