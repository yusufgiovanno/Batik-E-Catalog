<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    public function index()
    {
        $data = Setting::find(1);

        return view('setting', ['data' => $data]);
    }

    public function update(Request $r)
    {
        //return dd($r->input());

        $data = Setting::find(1);
        $data->Tentang       = $r->tentang;
        $data->Instagram     = $r->instagram;
        $data->LinkInstagram = $r->linkinstagram;
        $data->Facebook      = $r->facebook;
        $data->LinkFacebook  = $r->linkfacebook;
        $data->Video         = $r->video;
        $data->save();

        if(isset($r->slide1)){
            $r->file('slide1')->storeAs('public/Slides', '1.jpg');
        }
        if(isset($r->slide2)){
            $r->file('slide2')->storeAs('public/Slides', '2.jpg');
        }
        if(isset($r->slide3)){
            $r->file('slide3')->storeAs('public/Slides', '3.jpg');
        }
        if(isset($r->slide4)){
            $r->file('slide4')->storeAs('public/Slides', '4.jpg');
        }

        return redirect('/settings')->with('info', 'Pengaturan Berhasil Disimpan');
    }

}
