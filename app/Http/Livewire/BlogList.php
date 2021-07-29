<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use App\Models\Topic;
use Livewire\Component;

class BlogList extends Component
{
    public function render()
    {
        $topics = Topic::all();
        $bloglist = Blog::orderBy('created_at','DESC')->get()->take(3);
        return view('livewire.blog-list',['bloglist'=>$bloglist,'topics'=>$topics])->layout('layouts.base');
    }
}
