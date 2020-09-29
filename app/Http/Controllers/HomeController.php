<?php

namespace App\Http\Controllers;

use App\document;
use Illuminate\Http\Request;
use App\User;
use App\Task;
use  Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::User()->role == 1){
            $approvedUsers = User::where('is_verified', 1)->get();
            $users = User::where('is_verified', 0)->get();
            return view('admin.dashboard', compact('users', 'approvedUsers'));
        }
        else{
            $documents = document::where('user_id', Auth::user()->id)->get();
            return view('user.dashboard', compact('documents'));
        }
    }
}
