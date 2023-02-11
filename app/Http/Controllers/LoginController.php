<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function index()
    {
        return view('pages.login.login-page');
    }

    public function authenticate(Request $request, User $user)
    {

        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            Alert::toast('Hi ' .  strtok(auth()->user()->name, ' ') . ', welcome to dashboard', 'success')->width('400px')->hideCloseButton()->timerProgressBar()->focusCancel(true);
            return redirect()->intended('rent-car');
        } else {
            Alert::toast('Login Failed!', 'error')->width('350px')->hideCloseButton()->timerProgressBar()->focusCancel(true);
            return Redirect::back()->withInput($request->all());
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
