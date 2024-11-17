<?php

namespace Database\Seeders;

use App\Models\sector;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeederSector extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
/*         $sectors = [
            'Temporal',
            'Agricola',
            'Industrial',
            'Mineria'
        ]; */

        $sectors = [
            [
                'nombre' => 'Cooperativa, ahorro y crédito',
                'razon_circulante' => 4.1,
                'prueba_acida' => 4.1,
                'rotacion_inventario' => 0,
                'rotacion_cuentas_por_cobrar' =>  0,
                'grado_endeudamiento' => 17,
                'razon_endeudamiento_patrimonial' => 0.3,
                'rentabilidad_neta_del_patrimonio'=> 10,
                'rentabilidad_del_activo' => 8.3,
                'rentabilidad_sobre_venta' => 13.9,
            ],
            [
                'nombre' => 'Contrista eléctrico',
                'razon_circulante' => 2.1,
                'prueba_acida' => 1.7,
                'rotacion_inventario' => 22,
                'rotacion_cuentas_por_cobrar' => 10.5,
                'grado_endeudamiento' => 47.4,
                'razon_endeudamiento_patrimonial' => 0.9,
                'rentabilidad_neta_del_patrimonio'=> 18.2,
                'rentabilidad_del_activo' => 11.7,
                'rentabilidad_sobre_venta' => 3.3,
            ],

        ];

        foreach($sectors as $sector){
            // sector::create(['nombre'=>$sector])->exclude('created_at','updated_at');
            DB::table('sectors')->insert(['nombre'=>$sector]);
        }
    }
}
