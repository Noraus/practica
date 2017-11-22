<?php

namespace App\Http\Controllers\Auth\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function showLoginForm() {
        return view('auth.adminLogin');
    }

    public function login(Request $request) {
        //validar
        $this->validate($request, [
            'name' => 'required|min:3',
            'password' => 'required|min:6'
        ]);
        //intentar login
        if (Auth::guard('admin')->attempt(['name' => $request->name, 'password' => $request->password])) {
            //si se conecta redirigir...
            return redirect() -> intended (route('adminHome'));
        }

        //si no se conecta redirigir...
        return redirect()->back()->withInput($request->only('name', 'remember'));
    }
}