<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class AdminLoginController extends Controller
{
  public function index()
  {
    return view('admin.auth.login');
  }

  public function login(Request $request)
  {

    $request->validate(
      [
        'email' => 'required|email',
        'password' => 'required'

      ]
    );

    if (Auth::attempt($request->only('email', 'password'))) {

      // if (auth()->user()->is_admin) {
      //   return redirect()->route('admin.home');
      // }

      dd(auth()->user()->name);

      Auth::logout();
    }

    return back()->withErrors(['email' => 'Wrong credentials']);
  }
}
