<?php

namespace App\Http\Livewire\Dashboard;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Dashboard extends Component
{
    public array $data = [
        'title'     => '<span class="font-weight-semibold">Home</span> - Dashboard',
        'urls'      => [
            'dashboard'
        ],
        'breadcrumb'    => [
            '<i class="icon-home2 mr-2"></i> Dashboard'
        ],
        'last-breadcrumb'   => 'Dashboard'
    ];

    public function render(): View
    {
        return view('livewire.dashboard.dashboard');
    }
}
