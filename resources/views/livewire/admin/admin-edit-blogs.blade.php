@extends('layouts.base')

@section('content')
<div id="about" style="padding-top: 50px;">
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Update Blog
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.blogs')}}" class="btn btn-success">All Blogs</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <form class="form-horizontal" enctype="multipart/form-data" action="{{ route('blog.update') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <div class="col-md-4">
                                    <input type="hidden" value="{{$blog->id}}" name="id">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Title</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Title" class="form-control input-md" value="{{$blog->title}}" name="title">
                                    @error('title') <span class="error">{{ $message }}</span>@enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Blog Image</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file" value="{{$blog->images}}" name="image">
                                    @error('image') <span class="error">{{ $message }}</span>@enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Content</label>
                                <div class="body-content">
                                    <input id="content" type="hidden" name="content" value="{{$blog->content}}">
                                    <trix-editor input="content"></trix-editor>
                                    @error('content') <span class="error">{{ $message }}</span>@enderror
                                </div>
                            </div>



                            <div class="form-group">
                                <label for="" class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary" onclick="confirm('Are your sure, your want to update this blog?') || event.stopImmediatePropagation()">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection