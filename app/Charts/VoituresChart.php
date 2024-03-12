<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Tarification;

class VoituresChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
      $T = Tarification::all();
        return $this->chart->barChart()
          ->setTitle('Mouhamed Express')
          ->setSubtitle('Diagramme de Tarifications')
          ->addData('Toyota Camry SE', [70, 13, 36, 94])
          ->addData('Volvo Higer',[50, 60, 70, 30])
          ->addData('Man TGS',[50, 60, 70, 30])
          ->setXAxis(['Janvier', 'Fevrier', 'Mars', 'Avril']);
    }
}
