<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ingrediente;

class IngredienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ingrediente::create(['Nombre' => 'Arroz']);
        Ingrediente::create(['Nombre' => 'Carne']);
        Ingrediente::create(['Nombre' => 'Pollo']);
        Ingrediente::create(['Nombre' => 'Queso parmesano']);
        Ingrediente::create(['Nombre' => 'Cebolla']);
        Ingrediente::create(['Nombre' => 'Mantequilla']);
        Ingrediente::create(['Nombre' => 'Harina']);
        Ingrediente::create(['Nombre' => 'Huevos']);
        Ingrediente::create(['Nombre' => 'Aceite']);
        Ingrediente::create(['Nombre' => 'Manzana']);
    }
}
