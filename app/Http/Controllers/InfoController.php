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
            'cart' => OrderList::where("user_id", auth()->user()->id)->where("status", "cart")->count(),
            'categories' => Kategory::all(),
            'users' => User::where("id", auth()->user()->id)->get()
        ]);
    }
    public function profile()
    {
        return view("cooperative.my-profile", [
            // 'cart' => OrderList::where("user_id", auth()->user()->id)->count(),
            'cart' => OrderList::where("user_id", auth()->user()->id)->where("status", "cart")->count(),
            'categories' => Kategory::all(),
            'users' => User::where("id", auth()->user()->id)->get()
        ]);
    }
    public function chat()
    {
        return view("cooperative.chat", [
            // 'cart' => OrderList::where("user_id", auth()->user()->id)->count(),
            'cart' => OrderList::where("user_id", auth()->user()->id)->where("status", "cart")->count(),

            'categories' => Kategory::all(),
            'chats' => Chat::where("user_id", auth()->user()->id)->get()
        ]);
    }
    public function history()
    {
        return view("cooperative.history", [
            // 'cart' => OrderList::where("user_id", auth()->user()->id)->count(),
            'cart' => OrderList::where("user_id", auth()->user()->id)->where("status", "cart")->count(),
            'categories' => Kategory::all()
        ]);
    }

    public function payNow(Request $request)
    {
        $data = json_decode($request->result);
        dd($data);
    }

    public function editMyAddress()
    {
        return view("cooperative.edit-my-address");
    }
}
