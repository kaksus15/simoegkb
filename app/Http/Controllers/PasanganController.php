<?php

namespace App\Http\Controllers;

use App\Models\Pasangan;
use App\Http\Requests\StorePasanganRequest;
use App\Http\Requests\UpdatePasanganRequest;

class PasanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('keluarga.pasangan.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('keluarga.pasangan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePasanganRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pasangan $pasangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pasangan $pasangan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePasanganRequest $request, Pasangan $pasangan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pasangan $pasangan)
    {
        //
    }
}
