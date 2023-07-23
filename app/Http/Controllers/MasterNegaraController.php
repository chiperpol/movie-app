<?php

namespace App\Http\Controllers;

use App\Models\Negara;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class MasterNegaraController extends Controller
{
    public function index()
    {
        $negaras = Negara::all();
        $countNegara = Negara::where('status', '1')->count();

        return view('negara.index', compact('negaras', 'countNegara'));
    }

    public function add()
    {
        return view('negara.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'negara' => 'required|string|max:50',
            'status' => 'required|in:0,1'
        ]);

        $negara = new Negara();
        $negara->nama_negara = $request->input('negara');
        $negara->status = $request->input('status');
        $negara->save();

        return redirect()->route('negara.index');
    }

    public function edit($id)
    {
        $negara = Negara::find($id);

        if (!$negara) {
            return redirect()->route('negara.index')->with('error', 'DATA NEGARA TIDAK DITEMUKAN!');
        }

        return view('negara.edit', compact('negara'));
    }

    public function update(Request $request, $id)
    {
        $negara = Negara::find($id);

        if (!$negara) {
            return redirect()->route('negara.index')->with('error', 'DATA NEGARA TIDAK DITEMUKAN!');
        }

        $request->validate([
            'nama_negara' => 'required|string|max:50',
            'status' => 'required|in: 1,0',
        ]);

        $negara->nama_negara = $request->input('nama_negara');
        $negara->status = $request->input('status');

        $negara->save();

        return redirect()->route('negara.index')->with('success', 'Data berhasil diupdate.');
    }

    public function destroy($id)
    {
        $negara = Negara::find($id);

        if (!$negara) {
            return redirect()->route('negara.index')->with('error', 'DATA NEGARA TIDAK DITEMUKAN!');
        }

        $negara->delete();

        return redirect()->route('negara.index')->with('success', 'Data berhasil dihapus.');
    }
}
