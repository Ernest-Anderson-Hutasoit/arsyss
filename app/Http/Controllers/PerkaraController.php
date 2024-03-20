<?php

namespace App\Http\Controllers;

use App\Models\Perkara;
use Illuminate\Http\Request;

class PerkaraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $perkaras = Perkara::with('barangbuktis', 'tersangkas', 'p16s', 'p16as', 'p16s.jaksas', 'p16as.jaksas')->get();
        // dd($perkaras);
        return view('index_perkara', ['perkaras'=> $perkaras]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    public function tambah()
    {
        return view('tambah_perkara');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $perkara = Perkara::with('barangbuktis', 'tersangkas', 'p16s', 'p16as', 'p16s.jaksas', 'p16as.jaksas')->findOrFail($id);
        // dd($perkara);
        return view('ubah_perkara', ['perkara' => $perkara]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }
    public function ubah(Request $request, $id)
    {
        $data = $request;
        dd($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function hapus(Perkara $perkara)
    {
        $perkara->delete();
        return redirect()->route('perkara.index')->with('success','Perkara berhasil dihapus');
    }
}
