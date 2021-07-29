<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $topics= Topic::all();
        return view('livewire.admin.admin-add-blogs', compact('topics'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:blogs',
            'content' => 'required',
            'image'=>'required|image|mimes:jpeg,png,gif,svg|max:2048',
        ]);

        $blog= new Blog();
        $blog->title =$request->title;
        $blog->slug = Str::slug($blog->title, '-');
        $blog->content =$request->content;
        if($request->hasFile('image')){
            $image = $request->file('image');
            $images = time().'.'.$image->extension();
            $image->move(public_path('images/blogs'),$images);
            $blog->images = $images;
        };
            
        $blog->topics()->attach($request->topics);

        $blog->save();
        
        return redirect('/admin/blogs/create')->with('message', 'Blog created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog=Blog::find($id);
        $topics= Topic::all();
        return view('livewire.admin.admin-edit-blogs',['blog'=>$blog, 'topics'=>$topics]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'title'=>['required', Rule::unique('blogs','title')->ignore($request->id)],
            'content' => 'required',
            'image'=>'required|image|mimes:jpeg,png,gif,svg|max:2048',
        ]);

        $blog=Blog::find($request->id);
        $blog->title=$request->title;
        $blog->slug = Str::slug($blog->title, '-');
        $blog->content=$request->content;
        $blog->images=$request->image;
        if($request->hasFile('image')){
            $image = $request->file('image');
            $images = time().'.'.$image->extension();
            $image->move(public_path('images/blogs'),$images);
            $blog->images =$images;
        };
        $blog->topics()->attach($request->topics);
        $blog->save();
        return redirect('/admin/blogs')->with('message', 'Blog updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect('/admin/blogs'); 
    }
}
