<?php

namespace App\Http\Controllers;
use App\Models\Produk;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){

        $produk = Produk::all();
        return view('index', compact('produk'));
    }

    public function shop(){
        return view('shop');
    }


    public function show($id)
    {
        $produk = Produk::findOrFail($id);
        return view('detail', compact('produk'));
    }
}
