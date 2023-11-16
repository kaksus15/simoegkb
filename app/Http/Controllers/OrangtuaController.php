<?php

namespace App\Http\Controllers;

use App\Models\Orangtua;
use App\Http\Requests\StoreOrangtuaRequest;
use App\Http\Requests\UpdateOrangtuaRequest;

class OrangtuaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('keluarga.orangtua.index');
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
    public function store(StoreOrangtuaRequest $request)
    {
        //
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
