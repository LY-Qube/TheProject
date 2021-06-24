<?php

namespace App\Http\Livewire\Layouts;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Sidebar extends Component
{
    public User $user;

    public string $active;

    public function render(): View
    {
        return view('livewire.layouts.sidebar');
    }

    public function mount(): void
    {
        $this->active = \Route::currentRouteName();
        $this->user = auth()->user();
    }

}
