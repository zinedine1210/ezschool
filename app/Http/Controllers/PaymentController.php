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


    public function checkout()
    {
        $data = OrderList::where("user_id", auth()->user()->id)->where("status", "cart")->get();
        $total = [];
        foreach ($data as $d) {
            $total[] = $d->total;
        }
        return view("cooperative.checkout", [
            'lists' => $data,
            'total' => array_sum($total),
            'gambar' => GambarProduct::all()->groupBy("product_id"),
            'addresses' => Address::where("user_id", auth()->user()->id)->where("main", 1)->get(),
            'alladdress' => Address::where("user_id", auth()->user()->id)->get()
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
            'total' => $request->totalorder,
            'status' => "precheckout",
            'address_id' => $request->address_id
        ]);

        if ($request->paymentmethod == "takeatplace") {
            dd("transaksi berhasil");
        }

        // TRANSAKSI
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = 'SB-Mid-server-vYVufVauLqI_v1CmCLsbUPvb';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => 10000,
            ),
            'customer_details' => array(
                'first_name' => 'budi',
                'last_name' => 'pratama',
                'email' => 'budi.pra@example.com',
                'phone' => '08111222333',
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        // AKHIR TRANSAKSI

        return view("cooperative.transaction", [
            'snaptoken' => $snapToken,
            'data' => $data->latest()
        ]);
    }
}
