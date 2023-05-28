<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TipoCliente;

class TipoClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tp = new TipoCliente();
        $tp->tipo_cliente = "Normal";
        $tp->save();

        $tp = new TipoCliente();
        $tp->tipo_cliente = "Empresa";
        $tp->save();
    }
}
