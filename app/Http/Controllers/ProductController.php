<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Kategory;
use Illuminate\Http\Request;
use App\Models\GambarProduct;
use App\Http\Controllers\Controller;
use App\Models\DetailProduct;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("cooperative.admin.product", [
            'products' => Product::latest()->paginate(10),
            'pictures' => GambarProduct::all(),
            'categories' => Kategory::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $input = '01234567890123456789';

        function generate_random_kode($input)
        {
            $input_length = strlen($input);
            $random_string = '';
            for ($i = 0; $i < 10; $i++) {
                $random_character = $input[mt_rand(0, $input_length - 1)];
                $random_string .= $random_character;
            }
            return $random_string;
        }

        $koderandom = generate_random_kode($input);


        $id = Product::create([
            'judul' => ucwords($request->judul),
            'key_product' => "BRG" . $koderandom,
            'harga' => $request->harga,
            'berat' => $request->berat,
            'kondisi' => $request->kondisi,
            'diskon' => $request->diskon,
            'stock' => $request->stock,
            'informasi' => $request->informasi,
            'deskripsi' => $request->deskripsi,
            'kategory_id' => $request->kategori
        ]);


        if ($request->hasFile('gambar')) {
            $files = $request->file('gambar');

            foreach ($files as $file) {
                $namaasli = $file->getClientOriginalName();

                $ekstensibuku = ['jpg', 'jpeg', 'png'];
                $ekstensi = explode('.', $namaasli);
                $ekstensi = strtolower(end($ekstensi));

                if (!in_array($ekstensi, $ekstensibuku)) {
                    return redirect()->back()->with('gagal', 'Terdapat File Dengan Ekstensi yang Tidak Diperbolehkan');
                }

                GambarProduct::create([
                    'product_id' => $id->id,
                    'gambar' => $namaasli
                ]);

                $file->move("gambar-product", $namaasli);
            }
        } else {
            return redirect()->back()->with("gagal", "Must Upload picture");
        }
        return redirect()->back()->with("berhasil", "Product uploaded successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view("cooperative.admin.detailproduct", [
            'products' => Product::where("id", $id)->get(),
            'details' => DetailProduct::where("product_id",  $id)->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Product::where("id", $id)
            ->update([
                'judul' => ucwords($request->judul),
                'harga' => $request->harga,
                'berat' => $request->berat,
                'kondisi' => $request->kondisi,
                'diskon' => $request->diskon,
                'informasi' => $request->informasi,
                'deskripsi' => $request->editdeskripsi,
                'kategory_id' => $request->kategori
            ]);

        if ($request->hasFile('editgambar')) {
            $files = $request->file('editgambar');

            $gambars = GambarProduct::where("product_id", $id)->get();
            foreach ($gambars as $gambar) {
                File::delete(public_path("gambar-product/" . $gambar->gambar));
                GambarProduct::where("product_id", $id)->delete();
            }

            foreach ($files as $file) {
                $namaasli = $file->getClientOriginalName();

                $ekstensibuku = ['jpg', 'jpeg', 'png'];
                $ekstensi = explode('.', $namaasli);
                $ekstensi = strtolower(end($ekstensi));

                if (!in_array($ekstensi, $ekstensibuku)) {
                    return redirect()->back()->with('gagal', 'Terdapat File Dengan Ekstensi yang Tidak Diperbolehkan');
                }

                GambarProduct::create([
                    'product_id' => $id,
                    'gambar' => $namaasli
                ]);

                $file->move("gambar-product", $namaasli);
            }

            return redirect()->back()->with("berhasil", "Product uploaded successfully");
        } else {
            return redirect()->back()->with("berhasil", "Product edited successfully, without changing the image");
        }

        return redirect()->back()->with("berhasil", "Product edited successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect()->back()->with("berhasil", "Product deleted successfully");
    }
}
