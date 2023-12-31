<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movies;
use App\Models\Negara;
use App\Models\Quality;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Expr\New_;

class MoviesController extends Controller
{
    public function index()
    {
        $movies = Movies::with('negaras', 'genres', 'qualitys')->get();
        $countMovies = Movies::where('status', '1')->count();
        return view('movies.index', compact('movies', 'countMovies'));
    }

    public function add()
    {
        $qualitys = Quality::all();
        $negaras = Negara::all();
        $genres = Genre::all();

        return view('movies.add', compact('qualitys', 'negaras', 'genres'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:100',
            'desc' => 'string',
            'tahun_terbit' => 'required|integer|min:0',
            'durasi' => 'required|integer|min:0',
            'negara_id' => 'required|exists:master_negara,id',
            'genre_id' => 'required|exists:master_genre,id',
            'quality_id' => 'required|exists:master_quality,id',
            'cover' => 'file',
            'foto' => 'file',
            'film' => 'required',
            'status' => 'required|in:1,0'
        ]);

        $movie = new Movies();

        $movie->judul = $request->input('judul');
        $movie->desc = $request->input('desc');
        $movie->tahun_terbit = $request->input('tahun_terbit');
        $movie->durasi = $request->input('durasi');
        $movie->negara_id = $request->input('negara_id');
        $movie->genre_id = $request->input('genre_id');
        $movie->quality_id = $request->input('quality_id');
        $movie->status = $request->input('status');

        if ($request->hasFile('cover')) {
            $coverPath = $request->file('cover')->store('covers', 'public');
            $movie->cover = $coverPath;
        } else {
            $movie->cover = 'covers/default.jpg';
        }

        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('fotos', 'public');
            $movie->foto = $fotoPath;
        } else {
            $movie->foto = 'fotos/default.jpg';
        }

        $typeFilm = $request->input('type_film');

        if ($typeFilm === 'video') {
            if ($request->hasFile('film')) {
                $filmPath = $request->file('film')->store('films', 'public');
                $movie->film = $filmPath;
            }
        } else {
            $movie->film = $request->input('film');
        }

        $movie->save();

        return redirect()->route('movies.index')->with('success', 'Film Berhasil ditambahkan!');
    }

    public function destroy($id)
    {
        $movie = Movies::find($id);

        if (!$movie) {
            return redirect()->route('movies.index')->with('error', 'DATA NEGARA TIDAK DITEMUKAN!');
        }

        $movie->delete();

        return redirect()->route('movies.index')->with('success', 'Data berhasil dihapus.');
    }
}
