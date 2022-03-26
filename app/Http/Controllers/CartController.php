<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Kategory;
use App\Models\OrderList;
use Illuminate\Http\Request;
use App\Models\GambarProduct;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function index()
    {
        return view('cooperative.cart', [
            'cart' => OrderList::where("user_id", auth()->user()->id)->get(),
            'categories' => Kategory::all(),
            'belanjaan' => OrderList::with(['product', 'detailproduct'])->where("user_id", auth()->user()->id)->latest()->get(),
            'gambar' => GambarProduct::all()->groupBy("product_id")
        ]);
    }

    public function addCart(Request $request)

    {
        $data = OrderList::where("product_id", $request->product_id)->where("user_id", auth()->user()->id)->count();
        if ($data > 0) {
            return redirect()->back()->with("gagal", "The product is already in the cart");
        }
        OrderList::create([
            'product_id' => $request->product_id,
            'user_id' => auth()->user()->id,
            'status' => "cart",
            'note' => $request->note,
            'detailproduct_id' => $request->detail,
            'jumlah' => 1,
            'harga' => $request->harga
        ]);

        return redirect()->back()->with("berhasil", "Successfully added to cart");
    }

    public function deleteCart($id)
    {
        OrderList::destroy($id);

        return redirect()->back()->with("berhasil", "Product has been removed");
    }

    public function precheckout(Request $request)
    {
        dd($request->all());
        OrderList::where('user_id', $request->user)
            ->update([
                'status' => 'precheckout'
            ]);

        return view("cooperative.checkout", [
            'addresses' => Address::where("user_id", auth()->user()->id)->where("main", 1)->get(),
            'alladdress' => Address::where("user_id", auth()->user()->id)->get(),
            'total' => $request->total,
            'data' => OrderList::with(['product', 'detailproduct'])->where('user_id', auth()->user()->id)->where("status", 'precheckout')->get(),
            'cart' => OrderList::where("user_id", auth()->user()->id)->get(),
            'gambar' => GambarProduct::all()->groupBy("product_id")
        ]);
    }
}
