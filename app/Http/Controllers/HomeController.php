<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

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
    public function successlogin()
    {
       if (Auth::check()) {
            return view('dashboard');
       }
        //Redirects user to login page if the session expired or the user is currently logged out alread
         return redirect('login');
    }

}
