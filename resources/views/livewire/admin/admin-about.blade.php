<div id="about" style="padding-top: 50px;">
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                All About Us
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.addabout')}}" class="btn btn-success">Add New About us</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    @if(Session::has('message'))
                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>title</th>
                                <th>Slug</th>
                                <th>Date</th>
                                <th>Content</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($abouts as $about)
                            <tr>
                                <td>{{ $about->id }}</td>
                                <td>{{ $about->title }}</td>
                                <td><a class="text-indigo-600 hover-text-indigo-900" target="_self" href="{{URL::to('/'.$about->slug)}}">
                                        {{$about->slug}}
                                    </a>
                                </td>
                                <td>{{$about->created_at}}</td>
                                <td>{!! $about->content !!}</td>
                                <td><img src="{{asset('images/about/'.$about->image)}}" width="60" /></td>
                                <td>
                                    <a href="{{route('admin.editabout',['about_slug'=>$about->slug])}}"><i class="fa fa-edit fa-2x"></i></a>
                                    <a href="#" onclick="confirm('Are your sure, your want to delete this about us?') || event.stopImmediatePropagation()" wire:click.prevent="deleteAbout({{$about->id}})"><i class="fa fa-times fa-2x"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>