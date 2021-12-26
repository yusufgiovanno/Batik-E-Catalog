<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreprodukRequest;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateprodukRequest;
use App\Models\produk;
use Illuminate\Support\Carbon;

class ProdukController extends Controller
{
    public function publish(Request $r){
        //return $r->input();
        $Prod = Produk::find($r->id);
        $Prod->ProdukStatus = 1;
        $Prod->ProdukWP =  Carbon::now();
        $Prod->save();

        return redirect('/produk');
    }

    public function archive(Request $r){
        //return $r->id;
        $Prod = Produk::find($r->id);
        $Prod->ProdukStatus = 2;

        $Prod->save();

        return redirect('/produk');
    }

    public function index()
    {
        $datas = produk::paginate(6);

        return view('index', [
            'datas' => $datas
        ]);
    }

    public function create()
    {
        $datas = produk::all();

        return view('produk', [
            'datas' => $datas
        ]);
    }

    public function store(StoreprodukRequest $request)
    {
        //
    }

    public function show(produk $produk)
    {
        //
    }

    public function edit(produk $produk)
    {
        //
    }

    public function update(UpdateprodukRequest $request, produk $produk)
    {
        //
    }

    public function destroy(produk $produk)
    {
        //
    }
}
