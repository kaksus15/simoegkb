<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Http\Requests\jabatan\StoreJabatanRequest;
use App\Http\Requests\jabatan\UpdateJabatanRequest;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Delete Jabatan!';
        $text = "Apakah kamu Yaqin akan menghapus data ini?";
        confirmDelete($title, $text);

        return view('jabatan.index', [
            'jabatan' => Jabatan::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jabatan.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJabatanRequest $request)
    {
        // Ambil Data
        $data = $request->all();

        // Proses Simpan ke DB
        Jabatan::create($data);

        toast('Data Jabatan telah ditambahkan', 'success');

        return to_route('jabatan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jabatan $jabatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jabatan $jabatan)
    {
        return view('jabatan.edit', [
            'jab' => $jabatan
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJabatanRequest $request, Jabatan $jabatan)
    {
        // get all request from frontsite
        $data = $request->all();

        // update to database
        $jabatan->update($data);

        // toast sweet alert
        toast('Data Jabatan telah di Update', 'success');

        // redirect to index
        return to_route('jabatan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jabatan $jabatan)
    {
        $jabatan->delete();
        alert()->success('Sukses', 'Data Jabatan Berhasil di Hapus');
        return back();
    }
}
