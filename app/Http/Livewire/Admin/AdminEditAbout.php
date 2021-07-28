<?php

namespace App\Http\Livewire\Admin;

use App\Models\About;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Validation\Rule;

class AdminEditAbout extends Component
{
    use WithFileUploads;
    public $about_id;
    public $title;
    public $slug;
    public $content;
    public $image;
    public $newimage;
    public $status;

    public function mount($about_slug)
    {
        $this->about_slug = $about_slug;
        $about = About::where('slug',$about_slug)->first();
        $this->about_id = $about->id;
        $this->title = $about->title;
        $this->slug = $about->slug;
        $this->content = $about->content;
        $this->status = $about->status;
        $this->image = $about->image;
        $this->newimage = $about->newimage;
    }
    public function generateSlug()
    {
        $this->slug = Str::slug($this->title);
    }
    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'title' => 'required',
            'slug'=>['required', Rule::unique('abouts','slug')->ignore($this->about_id)],
            'content' => 'required',
            'status' => 'required',
        ]);
    }
    public function updateAbout()
    {
        $this->validate([
            'title' => 'required',
            'slug'=>['required', Rule::unique('abouts','slug')->ignore($this->about_id)],
            'content' => 'required',
            'status' => 'required',
            'image' => 'required',
        ]);
        $about = About::find($this->about_id);
        $about->title=$this->title;
        $about->slug=$this->slug;
        $about->content=$this->content;
        $about->status=$this->status;
        if($this->newimage)
        {
            $imageName=Carbon::now()->timestamp.'.'.$this->newimage->extension();
            $this->newimage->storeAs('about',$imageName);
            $about->image=$imageName;
        }

        $about->save();
        session()->flash('message','About us has been updated successfully');
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-about')->layout('layouts.base');
    }
}
