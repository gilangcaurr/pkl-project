<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
// Sesuaikan dengan namespace model Anda

class CartController extends Controller
{
    // Menampilkan keranjang belanja pengguna
    public function index()
    {
        $user = auth()->user(); // Mendapatkan pengguna yang sedang login
        $carts = Cart::where('id_user', $user->id)->get(); // Mengambil semua item dalam keranjang pengguna

        return view('user.cart', compact('carts'));
    }

    // Menambah produk ke keranjang belanja
    public function store(Request $request)
    {
        $user = auth()->user(); // Mendapatkan pengguna yang sedang login

        // Cek apakah produk sudah ada di keranjang pengguna
        $existingCart = Cart::where('id_user', $user->id)
            ->where('id_produk', $request->id_produk)
            ->first();

        if ($existingCart) {
            // Jika produk sudah ada, tambahkan quantity
            $existingCart->quantity += $request->quantity;
            $existingCart->save();
        } else {
            // Jika produk belum ada, buat entri baru di keranjang
            $cart = new Cart();
            $cart->id_user = $user->id;
            $cart->id_produk = $request->id_produk;
            $cart->quantity = $request->quantity;
            $cart->save();
        }

        return redirect()->route('carts.index')->with('success', 'Produk berhasil ditambahkan ke keranjang.');
    }

    // Menghapus produk dari keranjang belanja
    public function destroy($id)
    {
        $cart = Cart::findOrFail($id);
        $cart->delete();

        return redirect()->route('carts.index')->with('success', 'Produk berhasil dihapus dari keranjang.');
    }

    // Mengupdate kuantitas produk dalam keranjang belanja
    public function update(Request $request, $id)
    {
        $cart = Cart::findOrFail($id);
        $cart->quantity = $request->quantity;
        $cart->save();

        return redirect()->route('carts.index')->with('success', 'Kuantitas produk dalam keranjang berhasil diupdate.');
    }

    public function updateQuantity(Request $request)
    {
        $cart = Cart::find($request->id);
        $cart->quantity = $request->quantity;
        $cart->save();

        return response()->json(['success' => true, 'message' => 'Quantity updated successfully']);
    }

    public function removeItem(Request $request)
    {
        $cart = Cart::find($request->id);
        $cart->delete();

        return response()->json(['success' => true, 'message' => 'Item removed successfully']);
    }
}
