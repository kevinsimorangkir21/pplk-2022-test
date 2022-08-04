<?php

namespace App\Http\Controllers;

use App\Models\Tebak_bangunan;
use App\Http\Requests\StoreTebak_bangunanRequest;
use App\Http\Requests\UpdateTebak_bangunanRequest;

class TebakBangunanHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $soal=Tebak_bangunan::all();
        return view('client.games.tebak-bangunan.home',compact('soal'));
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
     * @param  \App\Http\Requests\StoreTebak_bangunanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTebak_bangunanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tebak_bangunan  $tebak_bangunan
     * @return \Illuminate\Http\Response
     */
    public function show(Tebak_bangunan $tebak_bangunan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tebak_bangunan  $tebak_bangunan
     * @return \Illuminate\Http\Response
     */
    public function edit(Tebak_bangunan $tebak_bangunan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTebak_bangunanRequest  $request
     * @param  \App\Models\Tebak_bangunan  $tebak_bangunan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTebak_bangunanRequest $request, Tebak_bangunan $tebak_bangunan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tebak_bangunan  $tebak_bangunan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tebak_bangunan $tebak_bangunan)
    {
        //
    }
}