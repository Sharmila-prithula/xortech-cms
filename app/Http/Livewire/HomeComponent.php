<?php

namespace App\Http\Livewire;

use App\Models\About;
use App\Models\Blog;
use App\Models\Service;
use App\Models\Showcase;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $about=About::where('status',1)->first();
        $bloglist = Blog::orderBy('created_at','DESC')->get()->take(3);
        $services = Service::orderBy('created_at','DESC')->get();
        $showcases = Showcase::orderBy('created_at','DESC')->get();
        return view('livewire.home-component',['bloglist'=>$bloglist,'about'=>$about,'services'=>$services, 'showcases'=>$showcases])->layout('layouts.base');
    }
}
