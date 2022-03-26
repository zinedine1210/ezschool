<?php

namespace App\Http\Controllers;

use Midtrans\Snap;
// use Tridi\Cekmutasi\Cekmutasi;
use App\Models\Chat;
use App\Models\User;
use Midtrans\Config;
use App\Models\Kategory;
use App\Models\OrderList;
use Illuminate\Http\Request;
use Tridi\Cekmutasi\Cekmutasi;
use App\Http\Controllers\Controller;

class InfoController extends Controller
{

    public function shipment()
    {
        return view("cooperative.shipment");
    }
    public function editprofile()
    {
        return view("cooperative.edit-my-profile", [
            // 'cart' => OrderList::where("user_id", auth()->user()->id)->count(),
            'cart' => OrderList::where("user_id", auth()->user()->id)->where("status", "cart")->get(),
            'categories' => Kategory::all(),
            'users' => User::where("id", auth()->user()->id)->get()
        ]);
    }
    public function profile()
    {
        return view("cooperative.my-profile", [
            // 'cart' => OrderList::where("user_id", auth()->user()->id)->count(),
            'cart' => OrderList::where("user_id", auth()->user()->id)->where("status", "cart")->get(),
            'categories' => Kategory::all(),
            'users' => User::where("id", auth()->user()->id)->get()
        ]);
    }
    public function chat()
    {
        return view("cooperative.chat", [
            // 'cart' => OrderList::where("user_id", auth()->user()->id)->count(),
            'cart' => OrderList::where("user_id", auth()->user()->id)->where("status", "cart")->get(),

            'categories' => Kategory::all(),
            'chats' => Chat::where("user_id", auth()->user()->id)->get()
        ]);
    }
    public function history()
    {
        return view("cooperative.history", [
            // 'cart' => OrderList::where("user_id", auth()->user()->id)->count(),
            'cart' => OrderList::where("user_id", auth()->user()->id)->where("status", "cart")->get(),
            'categories' => Kategory::all()
        ]);
    }

    public function payNow(Request $request)
    {
        $data = json_decode($request->result);
        dd($data);
    }

    public function myAddress()
    {
        return view("cooperative.my-address");
    }

    public function editMyAddress()
    {
        return view("cooperative.edit-my-address");
    }

    public function transaksi()
    {
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

        return view("cooperative.transaksi", [
            'snaptoken' => $snapToken
        ]);
    }
}
