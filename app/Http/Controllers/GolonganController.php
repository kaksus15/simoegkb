<?php

namespace App\Http\Controllers;

use App\Models\Golongan;
use App\Http\Requests\StoreGolonganRequest;
use App\Http\Requests\UpdateGolonganRequest;

class GolonganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('golongan.index');
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
    public function store(StoreGolonganRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Golongan $golongan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Golongan $golongan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGolonganRequest $request, Golongan $golongan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Golongan $golongan)
    {
        //
    }
}
