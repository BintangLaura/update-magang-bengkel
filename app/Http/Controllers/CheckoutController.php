<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public function index(){
        $products = Product::all();
        return view ('pelanggan.checkout-barang', ['products' => $products]);
    }

    public function jasa(){
        return view ('pelanggan.checkout-jasa');
    }

    public function bayar() {
        return view('pelanggan.bayar');
    }
}
