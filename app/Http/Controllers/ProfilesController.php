<?php

namespace App\Http\Controllers;

use App\User;//Importing the class
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }    

    public function index($user)
    {
        
        //dd($user); //Get what we are passing in
        //dd(User::find($user)); // Get the actual user
        $user = User::find($user);
        //Passing data into the profile view, as a second argument, passing an array
        return view('profile',['user' => $user]);
    }
}
