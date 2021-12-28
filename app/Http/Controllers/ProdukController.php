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
        $datas = produk::where('ProdukStatus', 1)
        ->orderBy('updated_at', 'DESC')
        ->paginate(24);

        return view('index', [
            'datas' => $datas
        ]);
    }

    public function create()
    {
        $datas = produk::orderBy('id', 'DESC')->get();

        return view('produk', [
            'datas' => $datas
        ]);
    }

    public function store(StoreprodukRequest $r)
    {
        $prod = new produk();

        $prod->ProdukNama   = $r->nama;
        $prod->ProdukHarga  = $r->harga;
        $prod->ProdukDesc   = $r->desc;
        $prod->ProdukStatus = 0;

        if(isset($r->foto)){
            $prod->ProdukFoto = 'Produk/' . $r->id . '.jpg';
            $r->file('foto')->storeAs('public/Produk', $r->id . '.jpg');
        }

        $prod->save();

        return redirect('/produk');
    }

    public function show(produk $produk)
    {
        //
    }

    public function edit(produk $produk)
    {
        //
    }

    public function update(UpdateprodukRequest $r)
    {
        $prod = produk::find($r->id);

        $prod->ProdukNama  = $r->nama;
        $prod->ProdukHarga = $r->harga;
        $prod->ProdukDesc  = $r->desc;

        if(isset($r->foto)){
            $prod->ProdukFoto = 'Produk/' . $r->id . '.jpg';
            $r->file('foto')->storeAs('public/Produk', $r->id . '.jpg');
        }

        $prod->save();

        return redirect('/produk');
    }
}
