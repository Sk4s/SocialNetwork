<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Auth;
use Image;

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

    public function home(){
        return view('home', array('user' => Auth::user()) );
    }

    public function update_profile_picture(Request $request){

        // Handle the user upload of avatar
        if($request->hasFile('profile_picture')){
            $profile_picture = $request->file('profile_picture');
            $filename = time() . '.' . $profile_picture->getClientOriginalExtension();
            Image::make($profile_picture)->resize(300, 300)->save( public_path('/images/' . $filename ) );

            $user = Auth::user();
            $user->profile_picture = $filename;
            $user->set_avatar = true;
            $user->save();
        }

        return view('home', array('user' => Auth::user()) );
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
}
