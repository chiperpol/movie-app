<?php

namespace App\Http\Controllers;

use App\Models\Quality;
use Illuminate\Http\Request;

class MasterQualityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qualitys = Quality::all();
        $countQualitys = Quality::where('status', '1')->count();

        return view('quality.index', compact('qualitys', 'countQualitys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quality.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_quality' => 'required|string|max:50',
            'status' => 'required|in:0,1'
        ]);

        $quality = new Quality();
        $quality->nama_quality = $request->input('nama_quality');
        $quality->status = $request->input('status');
        $quality->save();

        return redirect()->route('quality.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $quality = Quality::find($id);

        if (!$quality) {
            return redirect()->route('quality.index')->with('error', 'DATA NEGARA TIDAK DITEMUKAN!');
        }

        return view('quality.edit', compact('quality'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $quality = Quality::find($id);

        if (!$quality) {
            return redirect()->route('quality.index')->with('error', 'DATA NEGARA TIDAK DITEMUKAN!');
        }

        $request->validate([
            'nama_quality' => 'required|string|max:50',
            'status' => 'required|in:1,0',
        ]);

        $quality->nama_quality = $request->input('nama_quality');
        $quality->status = $request->input('status');

        $quality->save();

        return redirect()->route('quality.index')->with('success', 'Data berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $quality = Quality::find($id);

        if (!$quality) {
            return redirect()->route('quality.index')->with('error', 'DATA QUALITY TIDAK DITEMUKAN!');
        }

        $quality->delete();

        return redirect()->route('quality.index')->with('success', 'Data berhasil dihapus.');
    }
}
