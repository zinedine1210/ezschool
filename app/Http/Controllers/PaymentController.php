<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Address;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\GambarProduct;
use App\Models\Kategory;
use App\Models\OrderList;

class PaymentController extends Controller
{


    public function checkout(Request $request)
    {
        OrderList::where('user_id', $request->user)
            ->update([
                'status' => 'precheckout'

            ]);

        return view("cooperative.checkout", [
            'addresses' => Address::where("user_id", auth()->user()->id)->where("main", 1)->get(),
            'alladdress' => Address::where("user_id", auth()->user()->id)->get()
        ]);
    }


    public function aksiCheckout(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|min:5|max:50',
            'phone' => 'required|numeric|min:10',
            'shippingprice' => 'required',
            'paymentmethod' => 'required'
        ]);

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

        $data = Order::create([
            'key_order' => "ORD" . $koderandom,
            'nama' => ucwords($validated['nama']),
            'phone' => $validated['phone'],
            'shippingprice' => $request->shippingprice,
            'paymentmethod' => $request->paymentmethod,
            'total' => 120000,
            'address_id' => $request->address_id
        ]);

        return view("cooperative.transaksi", [
            'data' => $data->latest()
        ]);
    }



    public function infoProduct()
    {
        $data = Product::where("key_product", request()->get("key"))
            ->first();

        $gambar = GambarProduct::where("product_id", $data->id)->orderBy("id", "asc")->get();
        $gambarpertama = GambarProduct::where("product_id", $data->id)->orderBy("id", "asc")->first();



        return view("cooperative.info-product", [
            'product' => $data,
            'pictures' => $gambar,
            // 'cart' => OrderList::where("user_id", auth()->user()->id)->count(),
            'cart' => OrderList::where("user_id", auth()->user()->id)->where("status", "cart")->get(),

            'categories' => Kategory::all(),
            'gambarpertama' => $gambarpertama
        ]);
    }
}
