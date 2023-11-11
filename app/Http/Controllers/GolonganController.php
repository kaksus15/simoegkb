<?php

namespace App\Http\Controllers;

use App\Models\Golongan;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\golongan\StoreGolonganRequest;
use App\Http\Requests\golongan\UpdateGolonganRequest;

class GolonganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Delete Golongan!';
        $text = "Apakah kamu Yaqin akan menghapus data ini?";
        confirmDelete($title, $text);

        return view('golongan.index', [
            'golongan' => Golongan::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('golongan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGolonganRequest $request)
    {
        // Ambil Data
        $data = $request->all();

        // Proses Simpan ke DB
        Golongan::create($data);

        toast('Data Golongan telah ditambahkan', 'success');

        return to_route('golongan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Golongan $golongan)
    {
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Golongan $golongan)
    {
        return view('golongan.edit', [
            'gol' => $golongan
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGolonganRequest $request, Golongan $golongan)
    {
        // get all request from frontsite
        $data = $request->all();

        // update to database
        $golongan->update($data);

        // toast sweet alert
        toast('Data Golongan telah di Update', 'success');

        // redirect to index
        return to_route('golongan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Golongan $golongan)
    {
        $golongan->delete();
        alert()->success('Sukses', 'Data Golongan Berhasil di Hapus');
        return back();
    }
}
