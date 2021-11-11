<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tarea;

class TareaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tarea = new Tarea;
        $tarea->nombre = "nombre1";
        $tarea->save();

        $tarea2 = new Tarea;
        $tarea2->nombre = "nombre2";
        $tarea2->save();

        $tarea3 = new Tarea;
        $tarea3->nombre = "nombre3";
        $tarea3->save();
    }
}