<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use App\Models\Genre;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $now = Carbon::now();

        $threeDaysAgo = $now->subDays(3);
        $latestMovies = Movies::where('created_at', '>=', $threeDaysAgo)->get();

        $genres = Genre::all();

        return view('dashboard.index', compact('latestMovies', 'genres'));
    }
}
