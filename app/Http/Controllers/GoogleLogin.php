<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

class GoogleLogin extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function redirectToMicrosoft()
    {
        return Socialite::driver('azure')->redirect();
    }
    public function redirectToRegister(){
        return view('auth.register');
    }
    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();
        $finduser = User::where('email', $user->email)->first();
        if($finduser){
            Auth::login($finduser);
            return redirect()->intended("/posts");
        }else{
            $newUser = User::create([
                'name' => $user->name,
                'email' => $user->email,
                'google_id'=> $user->id
            ]);
            Auth::login($newUser);
            return redirect()->intended("/posts");
        }
    }
    public function handleMicrosfotCallback(){
        echo "Login con microsoft";
    }
    public function logout(Request $request){
        Auth::logout();
        return redirect()->route("home");
    }
}
