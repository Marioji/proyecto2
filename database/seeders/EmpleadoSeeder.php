<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use App\Models\Empleado;
use App\Models\Idioma;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Empleado::factory()->count(8)->create()->each(
            function($empleado){
                $idiomas=["Francés","Inglés","Portugués","Catalán","Euskera","Gallego"];//Aeeary de idiomas
                $numeroIdiomas = rand (1,4);//Nº de idiomas hablados
                $idiomasHablados = Arr::random($idiomas, $numeroIdiomas);//Helper con laravel para sacar ideomas aleatorios del array
                foreach ($idiomasHablados as $idiomaHablado){//Foreach del nuevo array
                    $idioma = new Idioma();//Creo modelo idioma
                    $idioma->idioma=$idiomaHablado;//Asigno valores a los campos
                    $idioma->empleado=$empleado->id;//Asigno valores a los campos
                    $idioma->saveOrFail();//Guardo en la BBDD
                }


            });

        //
    }
}
