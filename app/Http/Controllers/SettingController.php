<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function dashboard(){
        if(!Session::get('status')) {return redirect('/');}
        return view('dashboard');
    }

    public function index()
    {
        if(!Session::get('status')) {return redirect('/');}
        $data = Setting::find(1);

        return view('setting', ['data' => $data]);
    }


    public function update(Request $r)
    {

        function getName() {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $randomString = '';

            for ($i = 0; $i < 5; $i++) {
                $index = rand(0, strlen($characters) - 1);
                $randomString .= $characters[$index];
            }

            return $randomString;
        }

        //return dd($r->all());
        $name = getName();

        $data = Setting::find(1);
        $data->Tentang        = $r->tentang;
        $data->Instagram      = $r->instagram;
        $data->LinkInstagram  = $r->linkinstagram;
        $data->Instagram2     = $r->instagram2;
        $data->LinkInstagram2 = $r->linkinstagram2;
        $data->Facebook       = $r->facebook;
        $data->LinkFacebook   = $r->linkfacebook;
        $data->Video          = $r->video;

        if(isset($r->slide1)){
            Storage::delete('Slides/' . $data->Slide1);
            $data->Slide1 = '1' . $name . '.jpg';
            $r->file('slide1')->storeAs('public/Slides', $data->Slide1);
        }
        if(isset($r->slide2)){
            Storage::delete('Slides/' . $data->Slide2);
            $data->Slide2 = '2' . $name . '.jpg';
            $r->file('slide2')->storeAs('public/Slides', $data->Slide2);
        }
        if(isset($r->slide3)){
            Storage::delete('Slides/' . $data->Slide3);
            $data->Slide3 = '3' . $name . '.jpg';
            $r->file('slide3')->storeAs('public/Slides', $data->Slide3);
        }
        if(isset($r->slide4)){
            Storage::delete('Slides/' . $data->Slide4);
            $data->Slide4 = '4' . $name . '.jpg';
            $r->file('slide4')->storeAs('public/Slides', $data->Slide4);
        }

        $data->save();

        return redirect('/settings')->with('info', 'Pengaturan Berhasil Disimpan');
    }

}
