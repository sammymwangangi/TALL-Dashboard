<?php

namespace App\Http\Controllers;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {

        $chart = (new LarapexChart)
            ->setType('line')
            ->setTitle('Earnings')
            ->setDataset([0, 10000, 5000, 15000, 10000, 20000, 15000, 25000, 20000, 30000, 25000, 40000])
            ->setLabels(["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]);

        $chart2 = (new LarapexChart)
            ->setTitle('My dataset')
            ->setType('area')
            ->setDataset([55, 30, 15])
            ->setColors(['#4e73df', '#1cc88a', '#36b9cc'])
            ->setLabels(["Direct", "Referral", "Social"]);

        return view('home', compact('chart', 'chart2'));
    }

}
