<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kategory;
use App\Models\OrderList;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("cooperative.account-setting", [
            // 'cart' => OrderList::where("user_id", auth()->user()->id)->count(),
            'cart' => OrderList::where("user_id", auth()->user()->id)->where("status", "cart")->count(),
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
        //
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
        $validated = $request->validate([
            'username' => 'min:5|max:50',
            'email' => 'email:dns|max:50|min:10',
            'oldpassword' => 'required|min:5|max:50',
            'newpassword' => 'required|min:5|max:50',
            'confirmpassword' => 'required|min:5|max:50|same:newpassword'
        ]);

        $oldpassword = User::where("id", $id)->first();

        if (!password_verify($validated['oldpassword'], $oldpassword->password)) {
            return redirect()->back()->with("gagal", "Password not found in our records");
        }

        User::where("id", $id)
            ->update([
                'username' => $validated['username'],
                'email' => $validated['email'],
                'password' => bcrypt($validated['newpassword'])
            ]);

        return redirect()->back()->with("berhasil", "Account edited successfully");
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
