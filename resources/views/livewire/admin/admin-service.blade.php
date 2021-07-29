<div id="about" style="padding-top: 50px;">
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                All Services
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.addservice')}}" class="btn btn-success">Add New Services</a>
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
                                <th>Title</th>
                                <th>Slug</th>
                                <th>Content</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($services as $service)
                            <tr>
                                <td>{{ $service->id }}</td>
                                <td>{{ $service->title }}</td>
                                <td><a class="text-indigo-600 hover-text-indigo-900" target="_self" href="{{URL::to('/'.$service->slug)}}">
                                        {{$service->slug}}
                                    </a>
                                </td>
                                <td>{!! substr_replace($service->content, "...", 50) !!}</td>
                                <td>{{$service->created_at}}</td>
                                <td>
                                    <a href="{{route('admin.editservice',['service_id'=>$service->id])}}"><i class="fa fa-edit fa-2x"></i></a>
                                    <a href="#" onclick="confirm('Are your sure, your want to delete this service?') || event.stopImmediatePropagation()" wire:click.prevent="deleteservice({{$service->id}})"><i class="fa fa-times fa-2x"></i></a>
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