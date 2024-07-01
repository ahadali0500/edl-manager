<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class auth extends Controller
{
    public function showLoginForm()
    {
        if (!Session::has('WisdomUserId')) {
            return view('users.auth.login');
        } else {
            return redirect('/dashboard');
        }
    }

    public function showRegisterForm()
    {
        return view('users.auth.register');
    }

    public function register(Request $request)
    {
        $data=DB::table('user')->insert([
            'email' => $request->input('email'),
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'password' => Hash::make($request->input('password')),
            'phone_number' => $request->input('phone_number'),
            'country' => $request->input('country'),
        ]);
        return response()->json(['success' => true]);
    }

    public function login(Request $request)
    {
        $user = DB::table('user')
            ->where('email', $request->input('email'))
            ->first();
        if (
            $user &&
            Hash::check($request->input('password'), $user->password)
        ) {
            Session::put('edlManagerUserId', $user->id);

            return response()->json(['message' => 'Login successful'], 200);
        } else {
            return response()->json(['message' => 'Invalid details'], 400);
        }
    }

    public function showsuccessRegister()
    {
        return view('users.auth.success');
    }    
}
