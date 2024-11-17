<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeederEmpresa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $empresas = [
            [   
                'sector_id' => 1,
                'nombre' => 'ACOFINGES',
                'nit' => '00000000',
                'nrc' => '00000000',
                'catalogo_listo' => false,
                'vinculacion_listo' =>false
            ],
            [
                'sector_id' => 2,
                'nombre' => 'CAESS',
                'nit' => '12345678',
                'nrc' => '12345678',
                'catalogo_listo' => false,
                'vinculacion_listo' =>false
            ],
            [
                'sector_id' => 2,
                'nombre' => 'LAGEO',
                'nit' => '12345678',
                'nrc' => '12345678',
                'catalogo_listo' => false,
                'vinculacion_listo' =>false
            ],
            [
                'sector_id' => 1,
                'nombre' => 'BANCOVI',
                'nit' => '12345678',
                'nrc' => '12345678',
                'catalogo_listo' => false,
                'vinculacion_listo' =>false
            ],
        ];

        DB::table('empresas')->insert($empresas);

    }
}
