<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class MasterGenreController extends Controller
{
    public function index()
    {
        $genres = Genre::all();
        $countGenre = Genre::where('status', '1')->count();

        return view('genre.index', compact('genres', 'countGenre'));
    }

    public function add()
    {
        return view('genre.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_genre' => 'required|string|max:50',
            'status' => 'required|in:0,1'
        ]);

        $genre = new Genre();
        $genre->nama_genre = $request->input('nama_genre');
        $genre->status = $request->input('status');
        $genre->save();

        return redirect()->route('genre.index');
    }

    public function edit($id)
    {
        $genre = Genre::find($id);

        if (!$genre) {
            return redirect()->route('genre.index')->with('error', 'DATA GENRE TIDAK DITEMUKAN!');
        }

        return view('genre.edit', compact('genre'));
    }

    public function update(Request $request, $id)
    {
        $genre = Genre::find($id);

        if (!$genre) {
            return redirect()->route('genre.index')->with('error', 'DATA NEGARA TIDAK DITEMUKAN!');
        }

        $request->validate([
            'nama_genre' => 'required|string|max:50',
            'status' => 'required|in: 1,0',
        ]);

        $genre->nama_genre = $request->input('nama_genre');
        $genre->status = $request->input('status');

        $genre->save();

        return redirect()->route('genre.index')->with('success', 'Data berhasil diupdate.');
    }

    public function destroy($id)
    {
        $genre = Genre::find($id);

        if (!$genre) {
            return redirect()->route('genre.index')->with('error', 'DATA GENRE TIDAK DITEMUKAN!');
        }

        $genre->delete();

        return redirect()->route('genre.index')->with('success', 'DATA BERHASIL DIHAPUS!');
    }
}
