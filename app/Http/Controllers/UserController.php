<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function users ()
    {
        $users = User::all();
        return view('users.users', [
            'users' => $users
        ]);
    }
    public function user(User $user)
    {
        return view('users.user', [
            'user' => $user
        ]);
    }

}


