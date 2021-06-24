<?php

namespace App\Http\Livewire\Layouts;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class HeaderPageFull extends Component
{
    public array $data;

    public function render(): View
    {
        return view('livewire.layouts.header-page-full');
    }
}
