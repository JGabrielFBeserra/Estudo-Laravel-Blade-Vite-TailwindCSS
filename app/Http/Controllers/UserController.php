<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function GetUsers ()
    {
        $users = User::all();
        return view('users.GetUsers', [
            'users' => $users
        ]);
    }
    public function GetUser(User $user)
    {
        return view('users.GetUser', [
            'user' => $user
        ]);
    }

    public function PostUser()
    {
        // Mostra formulário de cadastro
        return view('users.create');
    }

     public function PutUser(User $user)
    {
        return view('users.EditUser', compact('user'));
    }

}


