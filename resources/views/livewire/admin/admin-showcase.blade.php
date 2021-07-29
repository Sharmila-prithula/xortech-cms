<div id="about" style="padding-top: 50px;">
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                All Showcase
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.addshowcase')}}" class="btn btn-success">Add New Showcase</a>
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
                            @foreach($showcases as $showcase)
                            <tr>
                                <td>{{ $showcase->id }}</td>
                                <td>{{ $showcase->title }}</td>
                                <td><a class="text-indigo-600 hover-text-indigo-900" target="_self" href="{{URL::to('/'.$showcase->slug)}}">
                                        {{$showcase->slug}}
                                    </a>
                                </td>
                                <td>{{$showcase->created_at}}</td>
                                <td>{!! substr_replace($showcase->content, "...", 50) !!}</td>
                                <td><img src="{{asset('images/showcase/'.$showcase->image)}}" width="60" /></td>
                                <td>
                                    <a href="{{route('admin.editshowcase',['showcase_slug'=>$showcase->slug])}}"><i class="fa fa-edit fa-2x"></i></a>
                                    <a href="#" onclick="confirm('Are your sure, your want to delete this showcase us?') || event.stopImmediatePropagation()" wire:click.prevent="deleteShowcase({{$showcase->id}})"><i class="fa fa-times fa-2x"></i></a>
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