<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function index()
    {
        return view('cooperative.info-product');
    }

    public function address()
    {
        return view("cooperative.address");
    }
    public function shipment()
    {
        return view("cooperative.shipment");
    }
}
