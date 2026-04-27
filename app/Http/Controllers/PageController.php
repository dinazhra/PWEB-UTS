<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function dashboard(Request $request){
        if ($request->isMethod('post')) {
            $request->validate([
                'username' => 'required',
                'password'=> 'required'],
                [
                'username.required' => 'Username wajib diisi!',
                'password.required'=> 'Password wajib diisi!'
                ]);
                }

                if (!$request->username){
                    return redirect('/');
                }
                $username = $request->username;

                return view('dashboard', ["username" => $username]);
    }

    public function profile(Request $request){
        $username = $request->username;
        return view('profile', ["username" => $username]);
    }

    public function pengelolaan(Request $request){
        $username = $request->username;

        $produk = [
                  ["nama" => "Urea", "harga" => "50000", "jumlah" => "17", "gambar" => "urea.png"],
                  ["nama" => "NPK", "harga" => "75000", "jumlah" => "10", "gambar" => "npk.png"],
                  ["nama" => "Kompos", "harga" => "35000", "jumlah" => "25", "gambar" => "kompos.png"],
                  ["nama" => "Kandang", "harga" => "20000", "jumlah" => "6", "gambar" => "pupukkandang.png"],
        ];

        return view('pengelolaan', ["produk" => $produk, "username" => $username]);
    }

}
