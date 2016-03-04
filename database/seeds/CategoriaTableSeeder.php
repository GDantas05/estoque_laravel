<?php

use Illuminate\Database\Seeder;
use estoque\Categoria;

class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create(['nome' => 'Eletrônicos']);
        Categoria::create(['nome' => 'Informática']);
        Categoria::create(['nome' => 'Games']);
    }
}
