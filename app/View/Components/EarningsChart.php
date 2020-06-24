<?php

namespace App\View\Components;

use Illuminate\View\Component;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class EarningsChart extends Component
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
            ->setType('line')
            ->setTitle('Earnings')
            ->setXAxis([
                'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'
            ])
            ->setDataset([
                [
                    'name'  =>  'Earnings',
                    'data'  =>  [0, 10000, 15000, 10000, 20000, 15000, 25000, 20000, 30000, 25000, 40000]
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
        return view('components.earnings-chart');
    }
}
