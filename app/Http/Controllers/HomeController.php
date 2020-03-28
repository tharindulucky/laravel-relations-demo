<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;

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
        $users = User::with('getAddressRelation', 'getPostRelation.getCommentsRelation', 'getRolesRelation')->get();
        //$posts = Post::with('getUserRelation')->get();
        dd($users);
        return view('home');
    }
}
