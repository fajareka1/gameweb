<?php

namespace App\Http\Controllers;

use App\Models\favorit;
use App\Http\Requests\StorefavoritRequest;
use App\Http\Requests\UpdatefavoritRequest;

class FavoritController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorefavoritRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorefavoritRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\favorit  $favorit
     * @return \Illuminate\Http\Response
     */
    public function show(favorit $favorit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\favorit  $favorit
     * @return \Illuminate\Http\Response
     */
    public function edit(favorit $favorit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatefavoritRequest  $request
     * @param  \App\Models\favorit  $favorit
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatefavoritRequest $request, favorit $favorit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\favorit  $favorit
     * @return \Illuminate\Http\Response
     */
    public function destroy(favorit $favorit)
    {
        //
    }
}
