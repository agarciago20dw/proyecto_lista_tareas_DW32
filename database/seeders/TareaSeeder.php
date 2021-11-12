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
        $tarea->nombre = "Estudiar Laravel";
        $tarea->save();

        $tarea2 = new Tarea;
        $tarea2->nombre = "Documentar tarea Despliegues";
        $tarea2->save();

        $tarea3 = new Tarea;
        $tarea3->nombre = "Practicar Ajax";
        $tarea3->save();
    }
}