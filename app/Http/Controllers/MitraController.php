<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class MitraController extends Controller
{
    public function index() {
        $products = Product::all();
        return view ('mitra.mitra', ['products' => $products]);
    }

    public function kategori() {
        return view ('mitra.kategori');
    }
}
