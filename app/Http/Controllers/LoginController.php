<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DetailProduct;
use App\Models\GambarProduct;
use App\Models\Kategory;
use App\Models\OrderList;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class LoginController extends Controller
{
    public function index()
    {
        return view('sign-in');
    }
    public function verification(Request $request)
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

        if ($request->kode == $request->nomerkode) {
            User::create([
                'username' => $request->username,
                'email' => $request->email,
                'password' => $request->password,
                'key_user' => "USR" . $koderandom
            ]);
            return redirect('/get-started-in')->with('login', 'Email verification is successful, please login!');
        } else {
            return redirect()->back()->with('gagal', 'Wrong verification code');
        }
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns|max:50|min:10',
            'password' => 'required|min:5|max:50'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('gate');
        }

        return back()->with('gagal', 'The provided credentials do not match our records.');
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        // if (isset($_COOKIE['codeuser'])) {
        //     setcookie('codeuser', '', 0, '/');
        // }

        return redirect('/')->with('login', 'You are logged out');
    }

    public function deleteUser($id)
    {
        User::destroy($id);
        return redirect()->back()->with("berhasil", "User deleted successfully");
    }

    public function editUser(Request $request)
    {
        User::where('id', $request->id)
            ->update([
                'isAdmin' => $request->admin
            ]);

        return redirect()->back()->with('berhasil', 'User changed successfully');
    }

    public function aksiEditProfile(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'min:5|max:50',
            'tanggallahir' => 'date',
            'phone' => 'numeric'
        ]);


        $tanggallahir = date('d F Y', strtotime($validated['tanggallahir']));

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');

            $namaasli = $file->getClientOriginalName();

            $ekstensibuku = ['jpg', 'jpeg', 'png'];
            $ekstensi = explode('.', $namaasli);
            $ekstensi = strtolower(end($ekstensi));

            if (!in_array($ekstensi, $ekstensibuku)) {
                return redirect()->back()->with('gagal', 'Terdapat File Dengan Ekstensi yang Tidak Diperbolehkan');
            }

            User::where("id", auth()->user()->id)
                ->update([
                    'nama' => ucwords($request->nama),
                    'profile' => $namaasli,
                    'tanggallahir' => $tanggallahir,
                    'phone' => $request->phone,
                    'gender' => $request->gender
                ]);

            $file->move("foto-profile", $namaasli);
        } else {
            User::where("id", auth()->user()->id)
                ->update([
                    'nama' => ucwords($request->nama),
                    'tanggallahir' => $tanggallahir,
                    'phone' => $request->phone,
                    'gender' => $request->gender
                ]);
            return redirect()->back()->with("berhasil", "Data changed successfully without ganti gambar");
        }

        return redirect()->back()->with("berhasil", "Data changed successfully");
    }
    public function gate()
    {
        return view('gate');
    }
    public function cooperative()
    {
        $data = GambarProduct::all()->groupBy("product_id");

        return view('cooperative.index', [
            'cart' => OrderList::where("user_id", auth()->user()->id)->where("status", "cart")->get(),
            'details' => DetailProduct::all(),
            'categories' => Kategory::all(),
            'products' => Product::all(),
            'latestproducts' => Product::paginate(10),
            'popularproducts' => Product::paginate(10),
            'pictures' => $data->all()
        ]);
    }
    public function library()
    {
        return view('library.index');
    }
}
