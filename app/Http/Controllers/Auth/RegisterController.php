<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Classes\IdNumberVerification;
use Illuminate\Support\Facades\Redirect;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     *
     * @param  Request  $request
     * @return Response
     */
    public function register(Request $request)
    {
        $idchecker = new IdNumberVerification();

        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'id_number' => ['required', 'numeric', 'digits_between:1,13',  'unique:users'],
            'cellphone' => ['required', 'numeric', 'min:10', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        //checks if id number is valid
        if (!$idchecker->isValid($request['id_number'])) {
            //redirects user to login page if login fails
            return Redirect::to('register')->with('error', 'Incorrectt Id Number!');
        }

        // The blog post is valid...
        User::create([
            'name' => $request['name'],
            'surname' => $request['surname'],
            'id_number' => $request['id_number'],
            'cellphone' => $request['cellphone'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'remember_token' => $request['_token'],
        ]);
        return ('<script type="text/javascript">
alert("Successfully Registered!");
window.location.href = "/login";
</script>');
    }
}
