<?php

namespace App\Http\Controllers\API\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    /**
     * handles api login
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $login = $request->validate([
            "email" => "required|email|string",
            "password" => "required|string|min:6"
        ]);
        
        if(!Auth::attempt($login)) {
            return response()->json([
                "status" => "error",
                "message" => "invalid login credentials"
            ], 401);
        }

        return response()->json([
            "status" => "success",
            "message" => "successfully logged in",
            "data" => ["user" => Auth::user(), "token" => Auth::user()->create_token()]
        ]);

    }
}
