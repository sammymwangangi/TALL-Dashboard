<?php

namespace App\Http\Livewire;
use App\User;

use Livewire\Component;

class Search extends Component
{
    public $searchTerm;
    public $users;
    public function render()
    {
        $this->users = User::all();
        return view('livewire.search');
    }
}
