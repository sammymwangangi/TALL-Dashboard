<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\SampleChart;

class HomeController extends Controller
{

    public function index()
    {
        $chart = new SampleChart;
        $chart->labels(["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]);
        $chart->dataset('Earnings', 'line', [0, 10000, 5000, 15000, 10000, 20000, 15000, 25000, 20000, 30000, 25000, 40000])
            ->lineTension(0.3)
            ->backgroundColor("rgba(78, 115, 223, 0.05)")
            ->color("#4fd1c5")
        ;

        $bar = new SampleChart;
        $bar->labels(["January", "February", "March", "April", "May", "June"]);
        $bar->dataset('Revenue', 'bar', [4215, 5312, 6251, 7841, 9821, 14984])
            ->backgroundColor("rgba(78, 115, 223, 0.05)")
            ->color("#68d391")
        ;

        $chart2 = new SampleChart;
        $chart2->labels(["Direct", "Referral", "Social"]);
        $chart2->dataset('My dataset', 'pie', [55, 30, 15])->backgroundColor(['#4e73df', '#1cc88a', '#36b9cc']);
        return view('home', compact('chart', 'chart2'));
    }

}
