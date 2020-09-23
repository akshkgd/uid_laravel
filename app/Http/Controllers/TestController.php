<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function ShowUsers(){
        $users = User::all();

        return view('users', compact('users'));
    }
}
