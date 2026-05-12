<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginProses(Request $request)
    {
        if(
            $request->username == 'admin' &&
            $request->password == 'admin123'
        )
        {
            session([
                'admin_login' => true
            ]);

            return redirect('/admin/products');
        }

        return redirect('/login')
            ->with('error', 'Username atau Password salah');
    }

    public function logout()
    {
        session()->forget('admin_login');

        return redirect('/login');
    }
}