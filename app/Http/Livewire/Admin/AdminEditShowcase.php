<?php

namespace App\Http\Livewire\Admin;

use App\Models\Showcase;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Validation\Rule;

class AdminEditShowcase extends Component
{
    use WithFileUploads;
    public $showcase_id;
    public $title;
    public $slug;
    public $content;
    public $image;
    public $newimage;
    public $status;

    public function mount($showcase_slug)
    {
        $this->showcase_slug = $showcase_slug;
        $showcase = Showcase::where('slug',$showcase_slug)->first();
        $this->showcase_id = $showcase->id;
        $this->title = $showcase->title;
        $this->slug = $showcase->slug;
        $this->content = $showcase->content;
        $this->image = $showcase->image;
        $this->newimage = $showcase->newimage;
    }
    public function generateSlug()
    {
        $this->slug = Str::slug($this->title);
    }
    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'title' => 'required',
            'slug'=>['required', Rule::unique('showcases','slug')->ignore($this->showcase_id)],
            'content' => 'required',
        ]);
    }
    public function updateShowcase()
    {
        $this->validate([
            'title' => 'required',
            'slug'=>['required', Rule::unique('showcases','slug')->ignore($this->showcase_id)],
            'content' => 'required',
            'image' => 'required',
        ]);
        $showcase = Showcase::find($this->showcase_id);
        $showcase->title=$this->title;
        $showcase->slug=$this->slug;
        $showcase->content=$this->content;
        if($this->newimage)
        {
            $imageName=Carbon::now()->timestamp.'.'.$this->newimage->extension();
            $this->newimage->storeAs('showcase',$imageName);
            $showcase->image=$imageName;
        }

        $showcase->save();
        session()->flash('message','Showcase us has been updated successfully');
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-showcase')->layout('layouts.base');
    }
}
