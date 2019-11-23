<?php

namespace App\Http\Controllers;
use App\User;
use Validator;
use Auth;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $requests){
        
        $user = new User();

        $status = $user::create([
            $requests->email,
            $requests->password,
        ]);
        return response()->json([
            'Status' => $status, 
        ]);
    }
    public function register(){

    }
    public function getUser(User $user){

    }
    public function updateScore(Request $requests, User $user){

    }
}
