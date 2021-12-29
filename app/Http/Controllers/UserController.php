<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function login(Request $r){
        $data = User::find(1);

        if ($data->Username ==  $r->username && $data->Password == md5($r->password)){
            Session::put('status', 'in');
            return redirect('/dashboard');
        } else {
            return redirect('/')->with('info', 'Login Gagal, Silahkan Coba Lagi');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('/');
    }

    public function passwd(Request $r){
        $user = User::find(1);
        if ($user->Password == md5($r->p1) && $r->p2 == $r->p3){
            $user->Password = md5($r->p2);
            $user->save();

            return redirect('/dashboard')->with('info', 'Password Berhasil Diperbarui.');
        } else {
            return redirect('/dashboard')->with('info', 'Password Tidak Cocok.');
        }
    }

}
