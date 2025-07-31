<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MeetingUser;

class UserController extends Controller
{
      public function signup(Request $request)
    {
        $user = MeetingUser::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password, 
            'role' => $request->role,
            'createdate' => now()
        ]);

        return response()->json(['message' => 'User created', 'user' => $user]);
    }

    public function login(Request $request)
    {
        $user = MeetingUser::where('email', $request->email)
            ->where('password', $request->password)
            ->first();

        if ($user) {
            return response()->json(['message' => 'Login successful', 'user' => $user]);
        } else {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }
    }

    public function getAllUsers()
    {
        $users = MeetingUser::all();
        return response()->json($users);
    }
}
