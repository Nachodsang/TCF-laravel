<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasapiTokens;

class AuthCtrl extends Controller
{

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ]);
        \App\Models\User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        return response()->json([

        ],200);
    }
    public function login(Request $request)
    {
        try
        {
            $request->validate([
                'email' => 'required',
                'password' => 'required',
            ]);
            $user = \App\Models\User::where('email',$request->email)->first();
            if(@$user){

                if(Hash::check($request->password, $user->password)) {
                    $token = $user->createToken($request->password)->plainTextToken;
                    // Auth::attempt(['email' => $request->email, 'password' => $request->password]);
                    return response()->json([
                        'status' => true,
                        'message' => 'Login successful!',
                        'token' => $token,
                    ],200);
                }
            }
            return response()->json([
                'status' => false,
                'message' => 'Invalid login details'
            ],200);

        } catch (\Exception $e) {
            return response()->json($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return response()->json($e->getMessage());
        } 
    }

    public function profile()
    {
        return response()->json([
            'status' => true,
            'message' => 'Profile data',
            'user' => auth()->user()
        ],200);
    }


    public function logout(Request $request)
    {
        auth()->user()->currentAccessToken()->delete();
        return response()->json([
            'message' => 'Logged out successfully!',
            'status_code' => 200
        ], 200);
    }
}
