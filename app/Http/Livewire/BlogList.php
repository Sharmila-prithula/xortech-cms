<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use Livewire\Component;

class BlogList extends Component
{
    public function render()
    {
        $bloglist = Blog::orderBy('created_at','DESC')->get()->take(3);
        return view('livewire.blog-list',['bloglist'=>$bloglist])->layout('layouts.base');
    }
}
