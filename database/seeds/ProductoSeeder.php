<?php

use Illuminate\Database\Seeder;
use App\Producto;
use Faker\Factory as Faker;
class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // Creamos una instancia de Faker
      //https://github.com/fzaninotto/Faker#fakerprovideren_usperson
		$faker = Faker::create();

		// Creamos un bucle para cubrir 5 productos:
		for ($i=0; $i<4; $i++)
		{
			// Cuando llamamos al método create del Modelo producto 
			// se está creando una nueva fila en la tabla.
			Producto::create(
                [	'descripcion'=>$faker->word(),
                    'descripcionCorta'=>$faker->name	
                ]);
            
        //'direccion'=>$faker->word(),
        //'telefono'=>$faker->randomNumber(9)	// de 9 dígitos como máximo.
			

		}

    }
}
