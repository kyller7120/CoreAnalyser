<?php

namespace App\Imports;

use App\Models\estado_resultado;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Collection;

class EstadoResultadosImport implements ToCollection, WithHeadingRow
{
    protected $periodo_id;

    // Constructor para recibir el periodo_id
    public function __construct($periodo_id)
    {
        $this->periodo_id = $periodo_id;
    }

    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            // Validar que las claves no sean nulas o vacías
            if (empty($row['ventas'])) {
                continue; // Salta esta fila si "ventas" es nulo o vacío
            }

            $data = [
                'ventas' => $row['ventas'],
                'devolucion_sobre_ventas' => $row['devolucion_sobre_ventas'],
                'costo_de_ventas' => $row['costos_de_ventas'],
                'gastos_de_operacion' => $row['gastos_de_operacion'],
                'otros_ingresos' => $row['otros_ingresos'],
                'gastos_no_operativos' => $row['gastos_no_operativos'],
                'impuestos_sobre_la_renta' => $row['impuestos_sobre_la_renta'],
            ];

            // Buscar un estado de resultados existente para el periodo
            $estadoExistente = estado_resultado::where('periodo_id', $this->periodo_id)->first();

            if ($estadoExistente) {
                // Si ya existe, actualizar el registro
                $estadoExistente->update($data);
            } else {
                // Si no existe, crear un nuevo registro
                estado_resultado::create(array_merge($data, ['periodo_id' => $this->periodo_id]));
            }
        }
    }
}
