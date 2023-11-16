<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Golongan;
use App\Http\Requests\pegawai\StorePegawaiRequest;
use App\Http\Requests\pegawai\UpdatePegawaiRequest;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Delete Pegawai!';
        $text = "Apakah kamu Yaqin akan menghapus data ini?";
        confirmDelete($title, $text);

        $pegawai = Pegawai::with(['golongan'])->latest()->get();

        return view('pegawai.index', [
            'pegawai' => $pegawai
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $gol = Golongan::all();

        return view('pegawai.create', [
            'golongan' => $gol
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePegawaiRequest $request)
    {

        // Ambil Data
        $data = $request->all();

        if ($request->file('image')) {
            $data['image'] = $request->file('image')->store('profile-image');
        }

        // Proses Simpan ke DB
        Pegawai::create($data);

        toast('Data Pegawai telah ditambahkan', 'success');

        return to_route('pegawai.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pegawai $pegawai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pegawai $pegawai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePegawaiRequest $request, Pegawai $pegawai)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pegawai $pegawai)
    {
        $pegawai->delete();
        alert()->success('Sukses', 'Data Pegawai Berhasil di Hapus');
        return back();
    }
}
