<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ArriendoController;
use App\Http\Controllers\VehiclesController;
use App\Models\User;
use App\Models\Arriendo;
use App\Models\Vehicle;
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
        $vehicles = Vehicle::whereDoesntHave('arriendos')->get();
        $vehiclesNotRelated = Vehicle::whereDoesntHave('arriendos')->get();
        return View('admin.newarriendo')->with([
            'vehicles' => $vehicles,
            'vehiclesNotRelated' => $vehiclesNotRelated,
        ]);
    }

    public function store2(Request $request){
        {
            $request->validate([
                'name' => 'required',
                'surname' => 'required',
                'lastname' => 'required',
                'rut' => 'required',
                'email' => 'required',
                'patent' => 'required',
                'Entrega' => 'required|date',
                'Devolucion' => 'required|date'
            ]);
            Arriendo::create([
                'name' => $request->input('name'),
                'surname' => $request->input('surname'),
                'lastname' => $request->input('lastname'),
                'rut' => $request->input('rut'),
                'email' => $request->input('email'),
                'patent' => $request->input('patent'),
                'Entrega' => $request->input('Entrega'),
                'Devolucion' => $request->input('Devolucion'),
            ]);
            return redirect()->route('list');
        }
    }
}
