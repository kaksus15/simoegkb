<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Http\Requests\Anak\StoreAnakRequest;
use App\Http\Requests\Anak\UpdateAnakRequest;

class AnakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('keluarga.anak.index');
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
    public function store(StoreAnakRequest $request)
    {
        //
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
