<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Orangtua;
use App\Http\Requests\Orangtua\StoreOrangtuaRequest;
use App\Http\Requests\Orangtua\UpdateOrangtuaRequest;

class OrangtuaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Delete Orang Tua!';
        $text = "Apakah kamu Yaqin akan menghapus data ini?";
        confirmDelete($title, $text);

        return view('keluarga.orangtua.index', [
            'orangtua' => Orangtua::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('keluarga.orangtua.create', [
            'pegawai' => Pegawai::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrangtuaRequest $request)
    {
        // Ambil Data
        $data = $request->all();

        // Proses Simpan ke DB
        Orangtua::create($data);

        toast('Data Orang Tua telah ditambahkan', 'success');

        return to_route('orangtua.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Orangtua $orangtua)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Orangtua $orangtua)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrangtuaRequest $request, Orangtua $orangtua)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Orangtua $orangtua)
    {
        //
    }
}
