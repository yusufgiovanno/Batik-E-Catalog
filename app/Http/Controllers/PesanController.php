<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorepesanRequest;
use App\Http\Requests\UpdatepesanRequest;
use App\Models\pesan;

class PesanController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(StorepesanRequest $r)
    {
        //return $r->input();

        $pesan = new pesan();
        $pesan->depan    = $r->depan;
        $pesan->belakang = $r->belakang;
        $pesan->email    = $r->email;
        $pesan->pesan    = $r->pesan;

        $pesan->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pesan  $pesan
     * @return \Illuminate\Http\Response
     */
    public function show(pesan $pesan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pesan  $pesan
     * @return \Illuminate\Http\Response
     */
    public function edit(pesan $pesan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepesanRequest  $request
     * @param  \App\Models\pesan  $pesan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepesanRequest $request, pesan $pesan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pesan  $pesan
     * @return \Illuminate\Http\Response
     */
    public function destroy(pesan $pesan)
    {
        //
    }
}
