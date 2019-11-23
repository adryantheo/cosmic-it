<?php

namespace App\Http\Controllers;
use App\User;
use Validator;
use Auth;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // public function login(Request $requests){
        
    //     $user = new User();

    //     $status = $user::create([
    //         $requests->email,
    //         $requests->password,
    //     ]);
    //     return response()->json([
    //         'Status' => $status, 
    //     ]);
    // }
    public function login(Request $request){
        $status= 401;
        $response= ['error' => 'Unauthorised'];
        if (Auth::attempt($request->only(['email','password']))) {
            $status= 200;
            $response= [
                'user' => Auth::user(),
                'token' => Auth::user()->createToken('token')->accessToken,
            ];
        }
        return response()->json($response, $status);
    }

    public function register(){

    }

    public function getUser(User $user){

    }
    public function updateScore(Request $requests, User $user){
        $status= $user->update();

    }

}
