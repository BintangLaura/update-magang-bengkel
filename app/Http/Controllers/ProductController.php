<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Models\Product;

class ProductController extends Controller
{
    public function tambah() {
         //memanggil view tambah
         return view('mitra.tambah-produk');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'product_code' => 'required|min:3',
            'category_id' => 'required',
            'product_name' => 'required|max:50',
            'description' => 'required|max:255',
            'harga' => 'required|numeric',
            'stock' => 'required|numeric',
            'image' => 'required|mimes:jpeg,jpg,png,gif'
        ], [
            'product_code.required' => 'Kode Produk Wajib Diisi',
            'product_code.min' => 'Kode Produk Minimal 3 Karakter',
            'category_id.required' => 'Kategori Wajib Diisi',
            'product_name.required' => 'Nama Produk Wajib Diisi',
            'product_name.max' => 'Nama Produk Maximal 50 Karakter',
            'description.required' => 'Deskripsi Produk Wajib Diisi',
            'description.max' => 'Deskripsi Produk Maximal 255 Karakter',
            'harga.required' => 'Harga Wajib Diisi',
            'harga.numeric' => 'Harga Wajib Diisi Dengan Angka',
            'stock.required' => 'Stok Wajib Diisi',
            'stock.numeric' => 'Stok Wajib Diisi Dengan Angka',
            'image.required' => 'Gambar Wajib Diisi',
            'image.mimes' => 'Gambar yang diperbolehkan hanya yang berekstensi JPEG, JPG, PNG dan GIF',
        ]);

        //menyimpan data file yang diupload ke variabel $file
        $foto_file = $request->file('image');
        $foto_ekstensi = $foto_file->extension();
        $nama_foto = date('ymdhis').".".$foto_ekstensi;

        //isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_img';
        $foto_file->move($tujuan_upload,$nama_foto);

        Product::create([
            'product_code' => $request->product_code,
            'category_id' => $request->category_id,
            'product_name' => $request->product_name,
            'description' => $request->description,
            'harga' => $request->harga,
            'stock' => $request->stock,
            'image' => $nama_foto,
        ]);
        return redirect('/dashboard/mitra');
    }

    public function edit($id)
    {
        // mengambil data pegawau berdasarkan id yang dipilih
        $products = Product::where('id', $id)->first();

        //passing data product ke view edit.blade.php
        return view('mitra.edit-produk')->with('products', $products);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'product_code' => 'required|min:3',
            'category_id' => 'required',
            'product_name' => 'required|max:50',
            'description' => 'required|max:255',
            'harga' => 'required|numeric',
            'stock' => 'required|numeric',
        ], [
            'product_code.required' => 'Kode Produk Wajib Diisi',
            'product_code.min' => 'Kode Produk Minimal 3 Karakter',
            'category_id.required' => 'Kategori Wajib Diisi',
            'product_name.required' => 'Nama Produk Wajib Diisi',
            'product_name.max' => 'Nama Produk Maximal 50 Karakter',
            'description.required' => 'Deskripsi Produk Wajib Diisi',
            'description.max' => 'Deskripsi Produk Maximal 255 Karakter',
            'harga.required' => 'Harga Wajib Diisi',
            'harga.numeric' => 'Harga Wajib Diisi Dengan Angka',
            'stock.required' => 'Stok Wajib Diisi',
            'stock.numeric' => 'Stok Wajib Diisi Dengan Angka',
        ]);

        //update foto jika mengganti foto
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'mimes:jpeg,jpg,png,gif'
            ], [
                'image.mimes' => 'Gambar yang diperbolehkan hanya yang berekstensi JPEG, JPG, PNG dan GIF'
            ]);

            //menyimpan data file yang diupload ke variabel $file
            $foto_file = $request->file('image');
            $foto_ekstensi = $foto_file->extension();
            $nama_foto = date('ymdhis').".".$foto_ekstensi;

            //isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'data_img';
            $foto_file->move($tujuan_upload,$nama_foto);

            //hapus foto lama
            $data_foto = Product::where('id', $request->id)->first();
            File::delete(public_path('data_img').'/'.$data_foto->image);

            Product::where('id', $request->id)->update([
                'image' => $nama_foto
            ]);
        }

        Product::where('id', $request->id)->update([
            'product_code' => $request->product_code,
            'product_name' => $request->product_name,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'harga' => $request->harga,
            'stock' => $request->stock
        ]);



        //alihkan halaman ke halaman product
        return redirect('/dashboard/mitra');
    }

    public function hapus($id)
    {
        //menghapus foto yang telah masuk ke folder data_img
        $data = Product::where('id', $id)->first();
        File::delete(public_path('data_img').'/'.$data->image);

        //menghapus data produk berdasarkan id
        Product::where('id', $id)->delete();
        // DB::table('products')->where('id',$id)->delete();

        //alihkan halaman ke halaman product
        return redirect('/dashboard/mitra');
    }
}
