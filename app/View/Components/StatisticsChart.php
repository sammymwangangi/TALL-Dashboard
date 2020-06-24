<?php

namespace App\View\Components;

use Illuminate\View\Component;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class StatisticsChart extends Component
{
    public $chart;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(LarapexChart $chart)
    {
        $this->chart = (new LarapexChart)
            ->setTitle('Statics')
            ->setType('area')
            ->setColors(['#4e73df', '#1cc88a', '#36b9cc'])
            ->setLabels(["Direct", "Referral", "Social"])
            ->setDataset([
                [
                    'name'  =>  'Statics',
                    'data'  =>  [55, 30, 15]
                ]
            ])
        ;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.statistics-chart');
    }
}
