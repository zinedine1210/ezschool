<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\ChangePassword;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ChangePasswordController extends Controller
{
    public function identification()
    {
        return view('password.identifikasi');
    }


    public function verification(Request $request)
    {
        $user = User::where('username', $request->username)->count();

        if ($user < 1) {
            return redirect()
                ->back()
                ->with('gagal', 'The provided credentials do not match our records.');
        }

        $input = '01234567890123456789';

        function generate_random_kode($input)
        {
            $input_length = strlen($input);
            $random_string = '';
            for ($i = 0; $i < 6; $i++) {
                $random_character = $input[mt_rand(0, $input_length - 1)];
                $random_string .= $random_character;
            }
            return $random_string;
        }

        $koderandom = generate_random_kode($input);

        $details = [
            'title' => 'Request Change Password Verification',
            'body' => $koderandom,
        ];
        $user = User::where('username', $request->username)->first();
        Mail::to($user['email'])->send(new ChangePassword($details));

        return view('password.verifikasi-password', [
            'email' => $user['email'],
            'username' => $user['username'],
            'kode' => $koderandom
        ]);
    }


    public function store(Request $request)
    {
        if ($request->kode == $request->nomerkode) {
            return view('password.change-password', [
                'email' => $request->email
            ]);
        } else {
            return redirect('/forgot-my-password')->with('gagal', 'Wrong verification code');
        }
    }

    public function changepassword(Request $request)
    {
        if ($request->password !== $request->confirmpassword) {
            return view('password.change-password', [
                'email' => $request->email
            ])->with('gagal', 'Password do not match!!');
        }

        User::where('email', $request->email)
            ->update([
                'password' => bcrypt($request->password)
            ]);

        return redirect('/get-started-in')->with('login', 'Your password has change successful, Please login!');
    }
}
