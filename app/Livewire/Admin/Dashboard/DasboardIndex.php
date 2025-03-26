<?php

namespace App\Livewire\Admin\Dashboard;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Dashboard')]
class DasboardIndex extends Component
{
    public function render()
    {
        return view('livewire.admin.dashboard.dasboard-index');
    }
}
