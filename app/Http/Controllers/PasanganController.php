<?php

namespace App\Http\Controllers;

use App\Models\Pasangan;
use App\Http\Requests\StorePasanganRequest;
use App\Http\Requests\UpdatePasanganRequest;
use App\Models\Pegawai;

class PasanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('keluarga.pasangan.index', [
            'pasangan' => Pasangan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('keluarga.pasangan.create', [
            'pegawai' => Pegawai::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePasanganRequest $request)
    {
        // Ambil Data
        $data = $request->all();

        // Proses Simpan ke DB
        Pasangan::create($data);

        toast('Data Pasangan telah ditambahkan', 'success');

        return to_route('pasangan.index');
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
