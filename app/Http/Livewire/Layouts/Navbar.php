<?php

namespace App\Http\Livewire\Layouts;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Navbar extends Component
{
    public User $user;

    public function render(): View
    {
        return view('livewire.layouts.navbar');
    }

    public function mount()
    {
        $this->user = auth()->user();
    }
}
