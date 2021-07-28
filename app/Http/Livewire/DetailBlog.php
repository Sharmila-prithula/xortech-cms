<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use Livewire\Component;

class DetailBlog extends Component
{
    public $title;
    public $content;
    public $urlslug;
    public $image;
    public $date;
    
    public function mount($urlslug)
    {
        $this->retrieveContent($urlslug);
    }

    public function retrieveContent($urlslug)
    {
        // Get home page if slug is empty
        $data = Blog::where('slug', $urlslug)->first();

        $this->title = $data->title;
        $this->content = $data->content;
        $this->image =$data->images;
        $this->date = $data->created_at;
    }
    public function render()
    {
        $bloglist = Blog::orderBy('created_at','DESC')->get()->take(3);
        return view('livewire.detail-blog',['bloglist'=>$bloglist])->layout('layouts.base');
    }
}