<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quality extends Model
{
    use HasFactory;

    protected $table = 'master_quality';
    protected $fillable = ['nama_quality', 'status'];

    public $timestamps = true;
}
