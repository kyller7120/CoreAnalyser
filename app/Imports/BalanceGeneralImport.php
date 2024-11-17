<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class BalanceGeneralImport implements ToCollection, WithHeadingRow
{
    protected $data = []; // Propiedad para almacenar los datos

    // Constructor para recibir el periodo_id
    public function __construct()
    {
        
    }

    // Método para procesar las filas importadas
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {

            // Almacenar cada fila en la propiedad $data, validando los valores vacíos
            $this->data[] = [
                'Activo circulante (corriente)' => !empty($row['activo_corriente']) ? $row['activo_corriente'] : null,
                'Activo fijo (no corriente)' => !empty($row['activo_fijo']) ? $row['activo_fijo'] : null,
                'Activo' => !empty($row['activo']) ? $row['activo'] : null,
                'Capital contable' => !empty($row['capital_contable']) ? $row['capital_contable'] : null,
                'Capital social' => !empty($row['capital_social']) ? $row['capital_social'] : null,
                'Costo de ventas' => !empty($row['costo_de_ventas']) ? $row['costo_de_ventas'] : null,
                'Cuentas por cobrar a corto plazo' => !empty($row['cuentas_por_cobrar_a_corto_plazo']) ? $row['cuentas_por_cobrar_a_corto_plazo'] : null,
                'Cuentas por cobrar a largo plazo' => !empty($row['cuentas_por_cobrar_a_largo_plazo']) ? $row['cuentas_por_cobrar_a_largo_plazo'] : null,
                'Cuentas por pagar a corto plazo' => !empty($row['cuentas_por_pagar_a_corto_plazo']) ? $row['cuentas_por_pagar_a_corto_plazo'] : null,
                'Cuentas por pagar a largo plazo' => !empty($row['cuentas_por_pagar_a_largo_plazo']) ? $row['cuentas_por_pagar_a_largo_plazo'] : null,
                'Devolución sobre ventas' => !empty($row['devolucion_sobre_ventas']) ? $row['devolucion_sobre_ventas'] : null,
                'Documentos por pagar a corto plazo' => !empty($row['documentos_por_pagar_a_corto_plazo']) ? $row['documentos_por_pagar_a_corto_plazo'] : null,
                'Efectivo y equivalentes' => !empty($row['efectivo_y_equivalentes']) ? $row['efectivo_y_equivalentes'] : null,
                'Ganancias retenidas' => !empty($row['ganancias_retenidas']) ? $row['ganancias_retenidas'] : null,
                'Gastos de operación' => !empty($row['gastos_de_operacion']) ? $row['gastos_de_operacion'] : null,
                'Gastos financieros' => !empty($row['gastos_financieros']) ? $row['gastos_financieros'] : null,
                'Impuestos' => !empty($row['impuestos']) ? $row['impuestos'] : null,
                'Inventario' => !empty($row['inventario']) ? $row['inventario'] : null,
                'Pasivo fijo (no corriente)' => !empty($row['pasivo_fijo']) ? $row['pasivo_fijo'] : null,
                'Pasivo' => !empty($row['pasivo']) ? $row['pasivo'] : null,
                'Pasivo circulante (corriente)' => !empty($row['pasivo_corriente']) ? $row['pasivo_corriente'] : null,
                'Patrimonio' => !empty($row['patrimonio']) ? $row['patrimonio'] : null,
                'Propiedad planta y equipo' => !empty($row['propiedad_planta_y_equipo']) ? $row['propiedad_planta_y_equipo'] : null,
                'Rebaja sobre ventas' => !empty($row['rebaja_sobre_ventas']) ? $row['rebaja_sobre_ventas'] : null,
                'Ventas' => !empty($row['ventas']) ? $row['ventas'] : null,
                'Utilidad neta' => !empty($row['utilidad_neta']) ? $row['utilidad_neta'] : null,
            ];
        }
    }


    // Método para obtener los datos procesados
    public function getData()
    {
        return $this->data;
    }
}
