<?php

namespace Database\Seeders;

use App\Models\Arriendo;
use App\Models\Vehicle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ArriendoSedder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vehicle = Vehicle::where([
            'patent' => 'AB1234'
        ])->first();

        if ($vehicle) {
            Arriendo::create([
                'name' => 'Nicolas',
                'surname' => 'Reyes',
                'lastname' => 'V',
                'rut' => '206135549',
                'patent' => $vehicle->id,
                'email' => 'Nicolas@gmail.com',
                'entrega' => '2005-02-02',
                'devolucion' => '2005-02-15',
            ]);

        }
    }
}
