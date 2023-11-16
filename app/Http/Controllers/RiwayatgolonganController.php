<?php

namespace App\Http\Controllers;

use App\Models\Riwayatgolongan;
use App\Http\Requests\StoreRiwayatgolonganRequest;
use App\Http\Requests\UpdateRiwayatgolonganRequest;

class RiwayatgolonganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('riwayatgolongan.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRiwayatgolonganRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Riwayatgolongan $riwayatgolongan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Riwayatgolongan $riwayatgolongan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRiwayatgolonganRequest $request, Riwayatgolongan $riwayatgolongan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Riwayatgolongan $riwayatgolongan)
    {
        //
    }
}
