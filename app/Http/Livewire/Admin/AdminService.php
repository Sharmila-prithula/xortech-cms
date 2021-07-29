<?php

namespace App\Http\Livewire\Admin;

use App\Models\Service;
use Livewire\Component;

class AdminService extends Component
{
    public function deleteservice($id){
        $service=Service::find($id);
        $service->delete();
        session()->flash('message','Service has been deleted successfully');
    }
    public function render()
    {
        $services = Service::all();
        return view('livewire.admin.admin-service',['services'=>$services])->layout('layouts.base');
    }
}
