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

    public function redirectToRegister(){
        return view('auth.register');
    }
    public function handleGoogleCallback(Request $request)
    {
        $user = Socialite::driver('google')->user();
        $finduser = User::where('email', $user->email)->first();
        if($finduser){
            // actualizado la ultima vez que inicio sesion
            $finduser->last_session = Carbon::now();
            $finduser->save();

            Auth::login($finduser);
            return redirect()->intended("/posts");
        }
        $request->session()->flash('message','El correo '.$user->email.' no se encuentra registrado');
        $request->session()->flash('status','Registre una cuenta');
        $request->session()->flash('color','red');
        return redirect()->route("login");
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
        $newUser = User::create([
            'raz_soc' => $request->razon_social,
            'email' => $request->email,
            'type_doc' => 'RUC',
            'nro_doc' => $request->numero_documento,
            'phone' => $request->celular,
            'depa' => $request->departamento,
            'prov' => $request->provincia,
            'dist' => $request->distrito,
            'dire' => $request->direccion,
            'update_prof' => '2',
        ]);
        if ($newUser) {
            $request->session()->flash('color','green');
            $request->session()->flash('status','Exito');
            $request->session()->flash('message','Cuenta de Usuario registrado correctamente');
            return redirect()->route('login');
        }
        $request->session()->flash('color','red');
        $request->session()->flash('status','Error');
        $request->session()->flash('message','No se registro el usuario, contactar con el administrador');
        return redirect()->route('register');
    }
}
