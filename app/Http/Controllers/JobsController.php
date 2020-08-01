<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class JobsController extends Controller
{
    /**
     * Show a list of all of jobs.
     *
     * @return Response
     */
    public function select()
    {
        if (Auth::user()) {
            $jobs = DB::table('jobs')->get();
            return view('jobs', ['jobs' => $jobs]);
        }
        return Redirect('login');
    }
}
