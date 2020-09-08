<?php

namespace App\Http\Controllers\API\V1;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    //
    /**
     * register user
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $request->validate([
            "first_name" => "required|string",
            "last_name" => "required|string",
            "email" => "required|email|string|unique:users,email",
            "phone" => "required|digits_between:8,15",
            "address" => "required|string",
            "password" => "required|string|min:6|confirmed",
            "password_confirmation" => "required"
        ]);

        try {
            //code...

            $user = User::create($request->only(
                "first_name",
                "last_name",
                "email",
                "phone",
                "address",
                "password"
            ));
    
            return response()->json([
                "status"  => "success",
                "data"    => $user,
                "message" => "user was successfully created"
            ], 201);

        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([
                "status"  => "error",
                "message" => "user was not created! try again",
                "error" => $th->getMessage()
            ], 400);
        }
    }
}
