<?php

namespace App\View\Components;

use Illuminate\Support\Facades\Http;
use Illuminate\View\Component;

class Github extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        // Fetch GitHub Repository
        $repository = Http::get('https://api.github.com/repos/sammymwangangi/TALL-Dashboard')->json();
        // Fetch Repo Contributions
        $contributor = Http::get('https://api.github.com/repos/sammymwangangi/TALL-Dashboard/contributors')->json();

        return view('components.github', compact('repository', 'contributor'));
    }
}
