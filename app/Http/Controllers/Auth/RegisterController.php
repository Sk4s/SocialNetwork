<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Image;

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
    protected $redirectTo = '/home';

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
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => 'required|string|max:50|unique:users',
            'firstname' => 'required|string|max:50',
            'lastname' => 'required|string|max:50',
            'adress' => 'required|string|max:100',
            'postal_code' => 'required|digits:5',
            'city' => 'required|string|max:50',
            'email' => 'required|string|email|max:100|unique:users',
            'mobile' => 'required|digits:10',
            'phone' => 'nullable|digits:10',
            'linkedin' => 'nullable|url|max:100',
            'github' => 'nullable|url|max:100',
            'website' => 'nullable|url|max:100',
            // 'profile_picture' => 'nullable|image', 
            // 'cv' => 'nullable|file|mimes:pdf|max:20000',
            'ilanguage' => 'nullable|string|max:255',
            'language' => 'nullable|string|max:50',
            'tool' => 'nullable|string|max:255',
            'know_how' => 'nullable|string|max:255',
            'expertise' => 'nullable|string|max:255',
            'bio' => 'nullable',
            'password' => 'required|string|min:6|confirmed'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data) // $data => $request
    {
        return User::create([
            'username' => $data['username'],
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'adress' => $data['adress'],
            'postal_code' => $data['postal_code'],
            'city' => $data['city'],
            'email' => $data['email'],
            'mobile' => $data['mobile'],
            'phone' => $data['phone'],
            'linkedin' => $data['linkedin'],
            'github' => $data['github'],
            'website' => $data['website'],
            'ilanguage' => $data['ilanguage'],
            'language' => $data['language'],
            'tool' => $data['tool'],
            'know_how' => $data['know_how'],
            'expertise' => $data['expertise'],
            'bio' => $data['bio'],
            'password' => bcrypt($data['password']),
            // 'profile_picture' => "http://gravatar.com/avatar/" . md5(strtolower(trim($data['email']))) . "?d=monsterid"
            // 'profile_picture' => $data['avatar']
            // 'cv' => $data['cv']
        ]); 
    }
}