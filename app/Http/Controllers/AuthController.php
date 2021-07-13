<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\http\Response;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //register
    public function register(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed|min:6'
        ]);

        $user = User::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password'])
        ]);

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    //login
    public function login(Request $request)
    {
        $fields = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        //Check Email
        $user = User::where('email', $fields['email'])->first();

        //Check Password
        if (!$user || !Hash::check($fields['password'], $user->password)){
            return response([
                'message' => 'Email or Password is not correct!'
            ],401);
        }

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    public function logout(Request $request)
    {
        //IT'S WORKING!!! Ignore RED underline
        auth()->user()->tokens()->delete();

        return [
            'message' => 'You Logged Out!'
        ];
    }
}
