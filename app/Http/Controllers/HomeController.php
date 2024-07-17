<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use Illuminate\Http\Request;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth::user();
        if ($user->isAdmin == 1){
            $produk = Produk::all();
            return view('admin.index',['produk'=>$produk]);
        } else {
            $produk = Produk::all();
            return view('index',['produk'=>$produk]);
        }

    }
}
