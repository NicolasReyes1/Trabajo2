<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use App\Models\Vehicle;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Models\Arriendo;

class ArriendoController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'lastname' => 'required',
            'rut' => 'required',
            'email' => 'required',
            'patent' => 'required|exists:arriendos,patent',
            'Entrega' => 'required',
            'Devolucion' => 'required'
        ]);
        Arriendo::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'lastname' => $request->lastname,
            'rut' => $request->rut,
            'email' => $request->email,
            'patent' => $request->patent,
            'Entrega' => $request->Entrega,
            'Devolucion' => $request->Devolucion
        ]);
    }
}
