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
        $perkaras = Perkara::with('barangbuktis', 'tersangkas')->get();
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
