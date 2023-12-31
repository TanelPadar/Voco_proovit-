<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        User::create([
            'username' => $request->input('username')
        ]);

        return 'Registration successful!';
    }

}
