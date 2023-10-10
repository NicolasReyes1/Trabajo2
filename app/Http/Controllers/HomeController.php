<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ArriendoController;
use App\Http\Controllers\VehiclesController;
use App\Models\Arriendo;
use App\Models\Category;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class HomeController extends Controller
{
    public function index(){
        $authenticated_user = Auth::user();
        // dd($categories); // El dd es su mejor alternativa para depurar el código
        $categories = Category::with('vehicles')->orderBy('id', 'desc')->get();
        $arriendos = Arriendo::all(); // Obtén los datos de arriendos desde tu modelo
        return View('admin.home')->with([
            'user' => $authenticated_user,
            'categories' => $categories,
            'arriendos' => $arriendos,
        ]);

    }

}
