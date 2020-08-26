<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Jobs;

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
    public function insert(Request $request) {
        
        //create user
        Jobs::create([
            'reference' => $request['reference'],
        'date_posted' => $request['date_posted'],
        'job_name' => $request['job_name'],
        'job_title' => $request['job_title'],
        'job_description' => $request['job_description'],
        'job_start_date' => $request['job_start_date'],
        'no_of_positions' => $request['no_of_position'],
        'company_posted' => $request['company_posted'],
        ]);
        return ('<script type="text/javascript">
alert("Successfully Registered!");
window.location.href = "#";
</script>');   }
}
