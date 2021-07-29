<?php

namespace App\Http\Livewire\Admin;

use App\Models\About;
use Livewire\Component;

class AdminAbout extends Component
{
    public function deleteAbout($id){
        $about=About::find($id);
        $about->delete();
        session()->flash('message','About us has been deleted successfully');
    }
    public function changeStatus($id){
        $about = About::find($id);
        $about->status = !$about->status;

        $about->save();

    }
    public function render()
    {
        $abouts=About::all();
        return view('livewire.admin.admin-about',['abouts'=>$abouts])->layout('layouts.base');
    }
}