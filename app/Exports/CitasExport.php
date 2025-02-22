<?php

namespace App\Exports;

use App\Models\appointments;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Chart\Chart;
use PhpOffice\PhpSpreadsheet\Chart\DataSeries;
use PhpOffice\PhpSpreadsheet\Chart\DataSeriesValues;
use PhpOffice\PhpSpreadsheet\Chart\PlotArea;
use PhpOffice\PhpSpreadsheet\Chart\Legend;
use PhpOffice\PhpSpreadsheet\Chart\Title;
use PhpOffice\PhpSpreadsheet\Chart\XAxis;
use PhpOffice\PhpSpreadsheet\Chart\YAxis;


class CitasExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return appointments::all();
        
    }

    public function headings(): array
    {
        return [
            'Nombre Completo',
            'Correo Electrónico',
            'Tipo de Vehículo',
            'Marca del Vehículo',
            'Placa del Vehículo',
            'Fecha de la Cita',
            'Hora de la Cita'
        ];
    }

    public function map($appointment): array
    {
        return [
            $appointment->nombre_completo,
            $appointment->correo_electronico,
            $appointment->tipo_vehiculo,
            $appointment->marca_vehiculo,
            $appointment->placa_vehiculo,
            $appointment->fecha_cita,
            $appointment->hora_cita,
        ];
    }


 
        public function styles(Worksheet $sheet)
    {
        // Estilo básico para los encabezados
        $sheet->getStyle('A1:D1')->getFont()->setBold(true);

        // Agregar un gráfico de barras usando PhpSpreadsheet
        $this->addChart($sheet);

        return [];
    }



    public function columnWidths(): array
    {
        return [
            'A' => 20, // Nombre Completo
            'B' => 30, // Correo Electrónico
            'C' => 20, // Tipo de Vehículo
            'D' => 20, // Marca del Vehículo
            'E' => 15, // Placa del Vehículo
            'F' => 15, // Fecha de la Cita
            'G' => 10, // Hora de la Cita
        ];
    }


    private function addChart(Worksheet $sheet)
    {
        // Crear un rango de datos para el gráfico
        $dataSeriesLabels = [
            new DataSeriesValues('String', 'Worksheet!$B$1', null, 1), // Etiqueta: Tipo Vehículo
        ];

        $xAxisTickValues = [
            new DataSeriesValues('String', 'Worksheet!$C$2:$C$10', null, 4), // Valores para el eje X (Fechas)
        ];

        $dataSeriesValues = [
            new DataSeriesValues('Number', 'Worksheet!$B$2:$B$10', null, 4), // Valores para el eje Y (Vehículos)
        ];

        // Crear la serie de datos
        $series = new DataSeries(
            DataSeries::TYPE_BARCHART, // Tipo de gráfico
            DataSeries::GROUPING_CLUSTERED,
            range(0, count($dataSeriesValues) - 1),
            $dataSeriesLabels,
            $xAxisTickValues,
            $dataSeriesValues
        );

        // Crear el área de dibujo del gráfico
        $plotArea = new PlotArea(null, [$series]);

        // Crear el gráfico
        $chart = new Chart(
            'chart1',
            new Title('Citas por Vehículo'),
            new Legend(Legend::POSITION_RIGHT, null, false),
            $plotArea,
            true,
            0,
            new XAxis(),
            new YAxis()
        );

        // Definir la posición del gráfico en la hoja
        $chart->setTopLeftPosition('F2');
        $chart->setBottomRightPosition('L15');

        // Agregar el gráfico a la hoja
        $sheet->addChart($chart);
    }

    
}
