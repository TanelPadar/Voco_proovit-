<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function loginFunction(Request $request): \Illuminate\Http\RedirectResponse
    {
        $credentials = $request->validate([
            'username' => 'required',
        ]);

        $user = User::where('username', $credentials['username'])->first();

        if ($user) {
            return redirect()->route('dashboard', ['username' => $user->username]);
        }
        return redirect()->route('login')->withErrors(['error' => 'Login failed. Check your username.']);
    }
    public function dashboard($username)
    {
        return view('dashboard', compact('username'));
    }


}
