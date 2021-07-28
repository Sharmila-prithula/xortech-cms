<?php

namespace App\Http\Livewire\Admin;

use App\Models\About;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Carbon\Carbon;

class AdminAddAbout extends Component
{
    use WithFileUploads;
    public $title;
    public $slug;
    public $content;
    public $image;
    public $status;
    
    public function mount(){
        $this->status=0;
    }
    public function generateSlug(){
        $this->slug=Str::slug($this->title,'-');
    }
    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'title' => 'required',
            'slug' => 'required|unique:abouts',
            'content' => 'required',
            'status' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg',
        ]);
    }
    public function addAbout(){
        $this->validate([
            'title' => 'required',
            'slug' => 'required|unique:abouts',
            'content' => 'required',
            'status' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg',
        ]);

        $about=new About();
        $about->title=$this->title;
        $about->slug=$this->slug;
        $about->content=$this->content;
        $about->status=$this->status;
        $imageName=Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('about',$imageName);
        $about->image=$imageName;

        $about->save();
        session()->flash('message','About us has been created successfully');
    }
    public function render()
    {
        return view('livewire.admin.admin-add-about')->layout('layouts.base');
    }
}