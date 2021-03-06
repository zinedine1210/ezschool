<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collection = collect(Chat::with("user")->latest()->get());

        $data = $collection->groupBy("user_id")->all();

        return view("cooperative.admin.chat", [
            // 'cart' => OrderList::where("user_id", auth()->user()->id)->count(),
            'chats' => $data
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

        Chat::create([
            'chat' => $request->chat,
            'key_chat' => "CHT" . $koderandom,
            'role' => $request->role,
            'user_id' => $request->user
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $collection = collect(Chat::with("user")->latest()->get());

        $data = $collection->groupBy("user_id")->all();

        return view("cooperative.admin.admin-chat", [
            'chatdetail' => $collection->where("user_id", $id)->groupBy("user_id")->all(),
            'chats' => Chat::where("user_id", $id)->get(),
            "listchats" => $data
        ]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Chat::where("user_id", $id)->delete();
        return redirect()->back()->with("berhasil", "Chat deleted successfully");
    }
}
