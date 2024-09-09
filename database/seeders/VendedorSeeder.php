<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vendedor;
use Illuminate\Support\Facades\DB;

class VendedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vendedor = new Vendedor();
        $vendedor->nombre = 'Willian Castro';
        $vendedor->telefono = '325832429';
        $vendedor->dni = '32453452';
        $vendedor->codigo = 'Ven-33334';
        $vendedor->save();

        $vendedor2 = new Vendedor();
        $vendedor2->nombre = 'Ana Flores';
        $vendedor2->telefono = '2323492';
        $vendedor2->dni = '43864359';
        $vendedor2->codigo = 'Ven-00089';
        $vendedor2->save();


        DB::Table('vendedores')->insert(['nombre'=> 'Marisol Fernandez', 'dni'=> '23402305', 'codigo'=> 'Ven-00999']);
    }
}
