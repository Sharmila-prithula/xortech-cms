<?php

namespace App\Http\Livewire\Admin;

use App\Models\Service;
use Livewire\Component;
use Illuminate\Support\Str;

class AdminAddService extends Component
{
    public $title;
    public $slug;
    public $content;

    public function generateSlug(){
        $this->slug=Str::slug($this->title,'-');
    }
    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'title' => 'required',
            'slug' => 'required|unique:services',
            'content' => 'required',
        ]);
    }
    public function addService()
    {
        $this->validate([
            'title' => 'required',
            'slug' => 'required|unique:services',
            'content' => 'required',
        ]);
        $service=new Service();
        $service->title=$this->title;
        $service->slug=$this->slug;
        $service->content=$this->content;

        $service->save();
        session()->flash('message','Service has been created successfully');
    }
    public function render()
    {
        return view('livewire.admin.admin-add-service')->layout('layouts.base');
    }
}
