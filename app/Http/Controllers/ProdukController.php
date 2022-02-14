<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use App\Http\Requests\StoreprodukRequest;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateprodukRequest;
use App\Models\produk;
use App\Models\Setting;
use App\Models\kategori;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    public function filter(Request $r)
    {
        $html = '';

        $data = produk::select('*')
            ->Where('ProdukStatus', 1);
        if ($r->key) {
            $data->where(DB::raw('lower(ProdukNama)'), 'like', '%' . strtolower($r->key) . '%');
        }
        if ($r->kat) {
            $data->where('KategoriId', $r->kat);
        }
        if ($r->sex) {
            $data->where('Gender', $r->sex);
        }
        $datas = $data->orderBy('updated_at')->get();

        foreach ($datas as $d) {
            $html .= '
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="service h-100">
                    <h4 class="text-primary">' . $d->ProdukNama . '</h4>
                    <img src="' . url('storage/' . $d->ProdukFoto) . '"
                        class="img img-fluid img-thumbnail mids value-img" style="height:275px"
                        data-action="zoom"
                        data-original="' . url('storage/' . $d->ProdukFoto) . '">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="text-center">Kode : ' . $d->ProdukKode . '</h6>
                        </div>
                        <div class="col-md-6">
                            <h6>&nbsp; Rp. ' . number_format($d->ProdukHarga, 0, '', '.') . '</h6>
                        </div>
                    </div>
                    <p class="text-center">' . $d->ProdukDesc . '.</p>
                </div>
            </div>
            ';
        }

        //return dd($r->input());
        return $html;
    }

    public function publish(Request $r)
    {
        //return $r->input();
        $Prod = Produk::find($r->id);
        $Prod->ProdukStatus = 1;
        $Prod->ProdukWP =  Carbon::now();
        $Prod->save();

        return redirect('/produk');
    }

    public function archive(Request $r)
    {
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

        $set = Setting::find(1);
        $kat = kategori::orderBy('id', 'DESC')->get();

        return view('index', [
            'datas' => $datas,
            'set'   => $set,
            'kat'   => $kat
        ]);
    }

    public function create()
    {
        if (!Session::get('status')) {
            return redirect('/');
        }
        $datas = produk::orderBy('id', 'DESC')->get();
        $kat = kategori::orderBy('id', 'DESC')->get();

        //return $datas;
        return view('produk', [
            'datas' => $datas,
            'kat' => $kat

        ]);
    }

    public function store(StoreprodukRequest $r)
    {
        //return dd($r->all());
        $prod = new produk();

        $prod->ProdukNama   = $r->nama;
        $prod->ProdukHarga  = $r->harga;
        $prod->ProdukDesc   = $r->desc;
        $prod->ProdukKode   = $r->kode;
        $prod->KategoriId   = $r->kategori;
        $prod->Gender       = $r->katGender;
        $prod->ProdukStatus = 0;
        $prod->save();

        if (isset($r->foto)) {
            $prod->ProdukFoto = 'Produk/' . $prod->id . '.jpg';
            $r->file('foto')->storeAs('public/Produk', $prod->id . '.jpg');
        }

        $prod->save();

        return redirect('/produk');
    }

    public function update(UpdateprodukRequest $r)
    {
        $prod = produk::find($r->id);

        $prod->ProdukNama   = $r->nama;
        $prod->ProdukHarga  = $r->harga;
        $prod->ProdukDesc   = $r->desc;
        $prod->ProdukKode   = $r->kode;
        $prod->KategoriId   = $r->kategori;
        $prod->Gender       = $r->katGender;

        if (isset($r->foto)) {
            $prod->ProdukFoto = 'Produk/' . $prod->id . '.jpg';
            $r->file('foto')->storeAs('public/Produk', $prod->id . '.jpg');
        }

        $prod->save();

        return redirect('/produk');
    }

    public function storeKat(Request $r)
    {
        //return $r->input();

        $data = new kategori();
        $data->Kategori = $r->kats;
        $data->save();

        return redirect('/produk');
    }

    public function updateKat(Request $r)
    {
        //return $r->input();

        $data = kategori::find($r->idk);
        $data->Kategori = $r->kats;
        $data->save();

        return redirect('/produk');
    }

    public function deleteKat($id)
    {
        kategori::find($id)->delete();

        return redirect('/produk');
    }
}
