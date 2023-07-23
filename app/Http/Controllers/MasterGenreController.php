<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterGenreController extends Controller
{
    public function index()
    {
        return view('genre.index');
    }
}
