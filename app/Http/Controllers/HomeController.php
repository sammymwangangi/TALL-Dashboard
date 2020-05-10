<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\SampleChart;

class HomeController extends Controller
{

    public function index()
    {
        $chart = new SampleChart;
        $chart->labels(['One', 'Two', 'Three', 'Four']);
        $chart->dataset('My dataset', 'line', [1, 2, 3, 4]);
        $chart->dataset('My dataset 2', 'line', [4, 3, 2, 1])->backgroundColor('#68D391');

        $chart2 = new SampleChart;
        $chart2->labels(['One', 'Two', 'Three', 'Four']);
        $chart2->dataset('My dataset', 'pie', [1, 2, 3, 4])->backgroundColor('#68D391');
        $chart2->dataset('My dataset 2', 'pie', [4, 3, 2, 1])->backgroundColor('#4FD1C5');
        return view('home', compact('chart', 'chart2'));
    }

}
