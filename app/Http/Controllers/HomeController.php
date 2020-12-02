<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class HomeController extends Controller
{

    public function index()
    {
        $earnings_chart = (new LarapexChart)
            ->setType('line')
            ->setTitle('Earnings')
            ->setXAxis([
                'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'
            ])
            ->setColors(['#F59E0B'])
            ->setDataset([
                [
                    'name'  =>  'Earnings',
                    'data'  =>  [0, 10000, 15000, 10000, 20000, 15000, 25000, 20000, 30000, 25000, 40000]
                ]
            ])
        ;

        $statics_chart = (new LarapexChart)
            ->setTitle('Statics')
            ->setType('area')
            ->setColors(['#1cc88a', '#4e73df', '#36b9cc'])
            ->setLabels(["Direct", "Referral", "Social"])
            ->setDataset([
                [
                    'name'  =>  'Statics',
                    'data'  =>  [55, 30, 15]
                ]
            ])
        ;

        return view('home', compact('earnings_chart', 'statics_chart'));
    }

}
