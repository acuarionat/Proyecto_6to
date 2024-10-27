<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator; // Corrección del namespace
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function authenticate() {
        $validator = Validator::make(request()->all(), [
            'email' => 'required|email',      
            'password' => 'required'          
        ]);
    
        if ($validator->passes()) {
            if (Auth::attempt(['email' => request()->email, 'password' => request()->password])) {
                $user = request()->user();
    
                if ($user->role === 'admin') {
                    return redirect()->intended(route('account.dashboardAdmin', ['id' => $user->id]))->with('success','Inicio de Sesion realizada con exito');
                } elseif ($user->role === 'empleado') {
                    return redirect()->intended(route('account.dashboardEmpleado', ['id' => $user->id]))->with('success','Inicio de Sesion realizada con exito');
                }
    
                return redirect()->intended(route('account.dashboard',['id' => $user->id]))->with('success','Inicio de Sesion realizada con exito');
            } else {
                return redirect()->route('account.login')->with('error', 'Email o password incorrectos');
            }
        } else {
            return redirect()->route('account.login')
                ->withInput()
                ->withErrors($validator);
        }
    }
    

    public function register(){
      
        return view('register');
    }

    public function processRegistration(){
        $validator = Validator::make(request()->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|regex:/^[a-zA-Z0-9._%+-]+@gmail\.com$/|unique:users', 
            'password' => 'required|string|min:8|confirmed', 
        ], [
            'email.regex' => 'El correo electrónico debe ser una dirección Gmail válida.',
            'email.unique' => 'El correo electrónico ya está en uso.',
            'password.min' => 'La contraseña debe tener al menos 8 caracteres.',
            'password.confirmed' => 'La confirmación de la contraseña no coincide.',
        ]);
         if($validator->passes()){
                    
               $user = new User();
               $user->name = request()->name;
               $user->email = request()->email;
               $user->password = Hash::make(request()->password);
               $user->role = 'cliente';
               $user->save();
               return redirect()->route('account.login')->with('success','Tu registro se realizo con exito');
        }else{
            return redirect()->route('account.register')
            ->withInput()
            ->withErrors($validator);
        }
    }

    public function logout(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->route('account.login');
    }
}
