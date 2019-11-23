<?php

namespace App\Http\Controllers;
use App\User;
use Validator;
use Auth;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function test(){
        return response()->json('Checked');
    }

    public function register(Request $request){
        $user = new User();
        $status = User::create([
            'email' => $request->email,
            'name' => $request->name,
            'password' => bcrypt($request->password),
        ]);
        return response()->json([
            'user' => $status, 
        ]);
    }
    public function login(Request $request){
        
    }
    public function getUser(User $user){
        return response()->json($user, 200);
    }
    public function updateScore (Request $request,User $user){
        $status = $user->update([
            $request->only(['score'])
        ]);
        return response()->json($status, 200);
    }
}
