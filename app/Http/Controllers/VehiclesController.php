<?php

namespace App\Http\Controllers;

use app\Http\Controllers\AuthController;
use App\Models\Arriendo;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class VehiclesController extends Controller
{
    use SoftDeletes;

    public function store(Request $request){
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'patent' => 'required|min:6|max:8|unique:vehicles,patent',
            'year' => 'required|min:4|max:4',
            'brand' => 'required',
            'model' => 'required'
        ]);
        Vehicle::create([
            'category_id' => $request->category_id,
            'patent' => $request->patent,
            'year' => $request->year,
            'brand' => $request->brand,
            'model' => $request->model
        ]);
        return redirect()->route('home');
    }

    public function delete($id){

        $arriendo = Arriendo::find($id);
    if (!$arriendo) {
        return redirect()->route('home')->with('error', 'El vehículo no existe.');
    }

    // Usar DB::transaction para asegurarse de que la operación sea exitosa
    DB::transaction(function () use ($arriendo) {
        // Eliminar el vehículo de forma suave
        $arriendo->delete();
    });

    return redirect()->route('home')->with('success', 'El vehículo ha sido eliminado de forma suave.');
}
}
