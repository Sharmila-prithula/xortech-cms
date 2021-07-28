<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminPanel extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-panel')->layout('layouts.pan');
    }
}
