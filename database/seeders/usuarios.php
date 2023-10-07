<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class usuarios extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Nicolas',
            'surname' => 'Reyes',
            'email' => 'Nicolas@vg.cl',
            'password' => Hash::make('123456'),
            'remember_token' => null,
            'phone' => '1234567890',
        ]);

        User::create([
            'name' => 'Ana',
            'surname' => 'Gómez',
            'email' => 'ana@example.com',
            'password' => Hash::make('contraseña1'),
            'remember_token' => null,
            'phone' => '1234567890',
        ]);

        User::create([
            'name' => 'Juan',
            'surname' => 'Pérez',
            'email' => 'juan@example.com',
            'password' => Hash::make('contraseña2'),
            'remember_token' => null,
            'phone' => '9876543210',
        ]);

        User::create([
            'name' => 'María',
            'surname' => 'Rodríguez',
            'email' => 'maria@example.com',
            'password' => Hash::make('contraseña3'),
            'remember_token' => null,
            'phone' => '5555555555',
        ]);

        User::create([
            'name' => 'Carlos',
            'surname' => 'Martínez',
            'email' => 'carlos@example.com',
            'password' => Hash::make('contraseña4'),
            'remember_token' => null,
            'phone' => '1111222233',
        ]);

        User::create([
            'name' => 'Luisa',
            'surname' => 'Fernández',
            'email' => 'luisa@example.com',
            'password' => Hash::make('contraseña5'),
            'remember_token' => null,
            'phone' => '9998887776',
        ]);
    }
}
