<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario1 = new Usuario;
        $usuario1->nombre = 'Adrián';
        $usuario1->apellido = 'García';
        $usuario1->save();

        $usuario2 = new Usuario;
        $usuario2->nombre = 'Erick';
        $usuario2->apellido = 'Ibañez';
        $usuario2->save();

        $usuario3 = new Usuario;
        $usuario3->nombre = 'Gorka';
        $usuario3->apellido = 'Larrañaga';
        $usuario3->save();
    }
}
