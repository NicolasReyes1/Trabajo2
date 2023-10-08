<?php

namespace App\Http\Controllers;

use App\Models\Arriendo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin(){
        return View('auth.login');
    }

    public function attemptLogin(Request $request){
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);
        $credentials = ['email' => $request->email, 'password' => $request->password];
        if(Auth::attempt($credentials, $request?->remember)){
            $user = Auth::user();
            return redirect()->route('home')->with('user', $user);
        }else{
            return redirect()->back()->withErrors(['error' => 'Credenciales incorrectas']);
        }
    }

    public function showRegister(){
        return View('auth.register');
    }

    public function storeAccount(Request $request){
        $request->validate([
            'name' => 'required|string',
            'surname' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|integer',
            'password' => 'required|min:6|confirmed'
        ]);
        $user = User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'phone' => $request->phone
        ]);
        Auth::login($user);
        return redirect()->route('home');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

    public function list(){
        $arriendo = Arriendo::all();
        return view('admin.list', ['arriendomostrar' => $arriendo]);
    }

    public function document(){
        return view('admin.newarriendo');
    }

    public function new(Request $request)
    {
        // Valida los datos del formulario
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'lastname' => 'required',
            'rut' => 'required', // Ajusta esto según tus necesidades
            'patent' => 'required',
            'email' => 'required|email', // Ajusta esto según tus necesidades
            'Entrega' => 'required|date',
            'Devolucion' => 'required|date',
        ]);

        // Crea una nueva instancia de Arriendo y guárdala en la base de datos
        $arriendo = Arriendo::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'lastname' => $request->lastname,
            'rut' => $request->rut,
            'patent' => $request->patent,
            'email' => $request->email,
            'entrega' => $request->entrega,
            'devolucion' => $request->devolucion,
        ]);

        $arriendo->save();
        return redirect()->route('home');
    }
}

