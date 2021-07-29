<?php

namespace App\Http\Livewire\Admin;

use App\Models\Service;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class AdminEditService extends Component
{
    public $title;
    public $slug;
    public $content;
    public $service_id;
    public $service_title;
    public $service_slug;
    public $service_content;

    public function mount($service_id)
    {
        $this->service_id = $service_id;
        $service = Service::where('id',$service_id)->first();
        $this->service_id = $service->id;
        $this->title = $service->title;
        $this->slug = $service->slug;
        $this->content = $service->content;
    }
    public function generateSlug()
    {
        $this->slug = Str::slug($this->title);
    }
    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'title' => 'required',
            'slug'=>['required', Rule::unique('services','slug')->ignore($this->service_id)],
            'content' => 'required',
        ]);
    }
    public function updateService()
    {
        $this->validate([
            'title' => 'required',
            'slug'=>['required', Rule::unique('services','slug')->ignore($this->service_id)],
            'content' => 'required',
        ]);
        $service = Service::find($this->service_id);
        $service->title = $this->title;
        $service->slug = $this->slug;
        $service->content=$this->content;
        
        $service->save();
        session()->flash('message','Service has been updated');
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-service')->layout('layouts.base');
    }
}
