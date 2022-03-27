<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Kategory;
use App\Models\OrderList;
use Illuminate\Http\Request;
use App\Models\GambarProduct;
use App\Http\Controllers\Controller;
use App\Models\DetailProduct;
use App\Models\Order;
use App\Models\Product;

class CartController extends Controller
{
    public function index()
    {
        return view('cooperative.my-cart', [
            'cart' => OrderList::where("user_id", auth()->user()->id)->where("status", "cart")->count(),
            'categories' => Kategory::all(),
            'belanjaan' => OrderList::where("user_id", auth()->user()->id)->get()
        ]);
    }

    public function addCart(Request $request)

    {
        $data = OrderList::where("product_id", $request->product_id)->where("user_id", auth()->user()->id)->count();
        if ($data > 0) {
            return redirect()->back()->with("gagal", "The product is already in the cart");
        }

        $data = Product::find($request->product_id);

        if ($request->detail == null) {
            if ($data->diskon != null) {
                $harga = $data->harga - ($data->harga * $data->diskon) / 100;
            } else {
                $harga = $data->harga;
            }
        } else {
            $detail = DetailProduct::find($request->detail);
            if ($data->diskon != null) {
                $harga = $detail->harga - ($detail->harga * $data->diskon) / 100;
            } else {
                $harga = $detail->harga;
            }
        }


        OrderList::create([
            'product_id' => $request->product_id,
            'user_id' => auth()->user()->id,
            'status' => "cart",
            'note' => $request->note,
            'detailproduct_id' => $request->detail,
            'jumlah' => 1,
            'total' => $harga,
            'harga' => $harga
        ]);

        return redirect()->back()->with("berhasil", "Successfully added to cart");
    }

    public function deleteCart($id)
    {
        OrderList::destroy($id);

        return redirect()->back()->with("berhasil", "Product has been removed");
    }
}
