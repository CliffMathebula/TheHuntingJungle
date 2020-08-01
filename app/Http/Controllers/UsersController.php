<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function select(Request $request)
    {
        //request user id from the uri
        $id = $request['id'];

        //checks if the user is currently logged in and redirect the user to login is user is not logged in 
        if (Auth::user()) {
            $user_details = User::where('id', $id)->orderBy('id', 'desc')->get();
            return view('view_details', ['user_details' => $user_details]);
        }
        return redirect('login');
    }

    public function delete()
    {
        $affectedRows = User::where('email', '=', 'cliff@gmail.com')->delete();
    }

    //method to update user details
    public function update(Request $request)
    {
        //validate form inputs
        $validatedData = $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'id_number' => 'required',
            'email' => 'required|email',
            'cellphone' => 'required',
            'password' => ['required', 'string', 'min:8'],
        ]);

        // Request user inputs from the form
        $id = $request->input('id');
        
        //performs update of user details
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->surname = $request->input('surname');
        $user->id_number = $request->input('id_number');
        $user->email = $request->input('email');
        $user->cellphone = $request->input('cellphone');
        $user->password =  Hash::make($request->input('password'));
        $user->save();

        return Redirect::to('home');


        /*
        $user = User::firstOrNew(array('name' => $name));
        $comments = User::where('email', $email)->orderBy('id', 'desc')->get();
        return view('view_details', ['comments' => $comments]);
                */

    }
}
