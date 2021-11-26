<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tarea;
use App\Models\Usuario;

class TareaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tarea1 = new Tarea;
        $tarea1->nombre = "Estudiar Laravel";
        $tarea1->usuario_id = Usuario::find(1)->id;
        $tarea1->save();

        $tarea2 = new Tarea;
        $tarea2->nombre = "Documentar tarea Despliegues";
        $tarea2->usuario_id = Usuario::find(2)->id;
        $tarea2->save();

        $tarea3 = new Tarea;
        $tarea3->nombre = "Practicar Ajax";
        $tarea3->usuario_id = Usuario::find(3)->id;
        $tarea3->save();

        $tarea4 = new Tarea;
        $tarea4->nombre = "Terminar ejercicio Bootstrap";
        $tarea4->usuario_id = Usuario::find(1)->id;
        $tarea4->save();

        $tarea5 = new Tarea;
        $tarea5->nombre = "Descansar... zzz";
        $tarea5->usuario_id = Usuario::find(2)->id;
        $tarea5->save();
    }
}