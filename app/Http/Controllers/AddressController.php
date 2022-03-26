<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Kategory;
use App\Models\OrderList;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("cooperative.my-address", [
            'cart' => OrderList::where("user_id", auth()->user()->id)->where("status", "cart")->get(),
            'categories' => Kategory::all(),
            'addresses' => Address::where("user_id", auth()->user()->id)->get()
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

        if ($request->inputjarak > 10) {
            return redirect()->back()->with("gagal", "Distance exceeds 10 km");
        }

        $youraddress = Address::where("user_id", auth()->user()->id)->count();
        if ($youraddress == 0) {
            Address::create([
                'key_address' => "ADR" . $koderandom,
                'address' => $request->inputalamat,
                'main' => true,
                'distance' => $request->inputjarak,
                'duration' => $request->inputwaktu,
                'note' => $request->note,
                'user_id' => auth()->user()->id
            ]);

            return redirect("/my-address")->with("Address added successfully");
        }


        Address::create([
            'key_address' => "ADR" . $koderandom,
            'address' => $request->inputalamat,
            'main' => false,
            'distance' => $request->inputjarak,
            'duration' => $request->inputwaktu,
            'note' => $request->note,
            'user_id' => auth()->user()->id
        ]);

        return redirect("/my-address")->with("Address added successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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


        $data = Address::where("user_id", $id)->get();
        foreach ($data as $d) {
            if ($d->main) {
                Address::where("id", $d->id)
                    ->update([
                        'main' => false
                    ]);
            }
        }

        Address::where('user_id', $id)
            ->where('id', $request->main)
            ->update([
                'main' => true
            ]);

        return redirect()->back()->with("berhasil", "Main address changed successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
