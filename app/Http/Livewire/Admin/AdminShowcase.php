<?php

namespace App\Http\Livewire\Admin;

use App\Models\Showcase;
use Livewire\Component;

class AdminShowcase extends Component
{
    public function deleteShowcase($id){
        $showcase=Showcase::find($id);
        $showcase->delete();
        session()->flash('message','Showcase us has been deleted successfully');
    }
    public function render()
    {
        $showcases=Showcase::all();
        return view('livewire.admin.admin-showcase',['showcases'=>$showcases])->layout('layouts.base');
    }
}
