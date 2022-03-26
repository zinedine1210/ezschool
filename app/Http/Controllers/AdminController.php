<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DetailProduct;
use App\Models\Product;

class AdminController extends Controller
{
    public function index()
    {
        $data = User::all();
        return view("cooperative.admin.dashboard", [
            'users' => $data
        ]);
    }
    public function user()
    {
        $data = User::all();
        return view("cooperative.admin.user", [
            'users' => $data
        ]);
    }
    public function banner()
    {
        return view("cooperative.admin.banner", [
            'banners' => Banner::all()
        ]);
    }
    public function editBanner($id)
    {
        Banner::destroy($id);

        return redirect()->back()->with("berhasil", "Banner successfully removed");
    }
    public function addBanner(Request $request)
    {

        $file = $request->file('banner');

        $namaasli = $file->getClientOriginalName();

        $ekstensibuku = ['jpg', 'jpeg', 'png'];
        $ekstensi = explode('.', $namaasli);
        $ekstensi = strtolower(end($ekstensi));

        if (!in_array($ekstensi, $ekstensibuku)) {
            return redirect()->back()->with('gagal', 'Terdapat File Dengan Ekstensi yang Tidak Diperbolehkan');
        }

        Banner::create([
            'banner' => $namaasli,
            'judul' => $request->judul,
            'informasi' => $request->informasi
        ]);

        $file->move("images/banner", $namaasli);

        return redirect()->back()->with("berhasil", "Banner successfully added");
    }

    public function addDetail(Request $request)
    {
        if ($request->harga == null) {
            $data = Product::where("id", $request->product)->first();
            $data = $data->harga;
        } else {
            $data = $request->harga;
        }
        DetailProduct::create([
            'nama' => $request->nama,
            'stock' => $request->stock,
            'harga' => $data,
            'product_id' => $request->product
        ]);

        return redirect()->back()->with("berhasil", "Details added successfully");
    }
    public function deleteDetail($id)
    {
        DetailProduct::destroy($id);
        return redirect()->back()->with("berhasil", "Details removed successfully");
    }
}
