<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\Pegawai;
use App\Http\Requests\Anak\StoreAnakRequest;
use App\Http\Requests\Anak\UpdateAnakRequest;

class AnakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('keluarga.anak.index', [
            'anak' => Anak::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('keluarga.anak.create', [
            'pegawai' => Pegawai::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAnakRequest $request)
    {
        // Ambil Data
        $data = $request->all();

        // Proses Simpan ke DB
        Anak::create($data);

        toast('Data Anak telah ditambahkan', 'success');

        return to_route('anak.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Anak $anak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Anak $anak)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAnakRequest $request, Anak $anak)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Anak $anak)
    {
        //
    }
}
