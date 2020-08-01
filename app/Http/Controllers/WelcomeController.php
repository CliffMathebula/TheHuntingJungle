<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\CanResetPassword;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
}
