<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Cart;

class PelangganController extends Controller
{
    public function index() {
        $products = Product::all();
        return view ('pelanggan.pelanggan', ['products' => $products]);
    }

    public function tambahBarang(Product $product) {
        $cart = Cart::where('users_id', Auth::id())
                ->where('products_id', $products_id)
                ->first();

        if ($cart) {
            $cart->jumlah++;
            $cart->save();
        } else {
            Cart::create([
                'users_id' => Auth::id(),
                'products_id' => $products_id,
                'jumlah' => 1,
            ]);
        }
        return redirect('/dashboard/pelanggan')->with('success', 'Barang Berhasil ditambahkan ke Keranjang');
    }

    public function lihatKeranjang() {
        $cart = Cart::where('users_id', Auth::id())->get();
        return view('pelanggan.keranjang', compact('cart'));
    }

    public function hapusBarang(Cart $cart) {
        $cart->delete();

        return redirect()->back()->with('success', 'Barang Berhasil Dihapus dari Keranjang');
    }
}
