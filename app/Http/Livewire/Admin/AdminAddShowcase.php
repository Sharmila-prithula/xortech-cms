<?php

namespace App\Http\Livewire\Admin;

use App\Models\Showcase;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Carbon\Carbon;

class AdminAddShowcase extends Component
{
    use WithFileUploads;
    public $title;
    public $slug;
    public $content;
    public $image;
    
    public function generateSlug(){
        $this->slug=Str::slug($this->title,'-');
    }
    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'title' => 'required',
            'slug' => 'required|unique:showcases',
            'content' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg',
        ]);
    }
    public function addShowcase(){
        $this->validate([
            'title' => 'required',
            'slug' => 'required|unique:showcases',
            'content' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg',
        ]);

        $showcase=new Showcase();
        $showcase->title=$this->title;
        $showcase->slug=$this->slug;
        $showcase->content=$this->content;
        $imageName=Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('showcase',$imageName);
        $showcase->image=$imageName;

        $showcase->save();
        session()->flash('message','Showcase us has been created successfully');
    }
    public function render()
    {
        return view('livewire.admin.admin-add-showcase')->layout('layouts.base');
    }
}