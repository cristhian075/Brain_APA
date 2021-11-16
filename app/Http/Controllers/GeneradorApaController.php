<?php

namespace App\Http\Controllers;

use App\Generador_apa;
use Illuminate\Http\Request;

class GeneradorApaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('generador_apa');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Generador_apa  $generador_apa
     * @return \Illuminate\Http\Response
     */
    public function show(Generador_apa $generador_apa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Generador_apa  $generador_apa
     * @return \Illuminate\Http\Response
     */
    public function edit(Generador_apa $generador_apa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Generador_apa  $generador_apa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Generador_apa $generador_apa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Generador_apa  $generador_apa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Generador_apa $generador_apa)
    {
        //
    }
}
