<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Cards extends Component
{
    public $title = 'The Coldest Sunset';
    public $description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.';
    public $item1 = '#photography';
    public $item2 = '#travel';
    public $item3 = '#winter';

    public function render()
    {
        return view('livewire.cards');
    }
}
