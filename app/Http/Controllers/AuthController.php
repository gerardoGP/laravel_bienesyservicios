<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Carbon;
class AuthController extends Controller
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
            $finduser->last_session = Carbon::now();
            $finduser->save();
            Auth::login($finduser);
            return redirect()->intended("/posts");
        }else{
            $newUser = User::create([
                'raz_soc' => $user->name,
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
    public function register(Request $request){
        $request->validate([
            "razon_social" => "required|max:255",
            "numero_documento" => "required|unique:users,nro_doc|max:25|min:8",
            "celular" => "required|max:15",
            "email" => "required|unique:users|max:255",
            "departamento" => "required|max:255",
            "provincia" => "required|max:255",
            "distrito" => "required|max:255",
            "direccion" => "required|max:255"
        ]);
        $findUser = User::where("email",$request->email)
        ->orWhere("nro_doc",$request->numero_documento)
        ->get();
        if ($findUser) { // ya existe
            
        }
        // $newUser = User::create([
        //     'raz_soc' => $user->name,
        //     'email' => $user->email,
        //     'google_id'=> $user->id
        // ]);
    }
}
