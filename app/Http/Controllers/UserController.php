<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Produk;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function detailToko($IdToko){
        $detailToko = User::findOrFail($IdToko);
        $listProduks = Produk::where('IdUser',$IdToko)->get();
        return view("konsumen.toko",compact('detailToko','listProduks'));
    }

    public function umkmHome(){
        $ProdukUMKM = Produk::where('IdUser',Auth::User()->IdUser)->take(3)->get();
        return view("umkm.beranda",compact("ProdukUMKM"));
    }
}
