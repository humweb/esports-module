@section('title')
    Maps -
    @parent
@stop

@section('content')
    <div class="card card-default">
        <div class="card-header">Maps</div>
        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Image</th>
                    <th>Updated</th>
                    <th>&nbsp;</th>
                </tr>
                </thead>
                <tbody>
                @foreach($maps as $post)
                    <tr>
                        <td>
                            {{ $post->name }}
                        </td>
                        <td>
                            @if($post->hasMedia('image'))
                                <img src="{{ $post->getFirstMediaUrl('image') }}" alt="" style="height:50px; width: auto;">
                            @endif
                        </td>
                        <td>{{ $post->updated_at->diffForHumans() }}</td>
                        <td class="text-right">
                            <div class="btn-group">
                                <a href="{{ route('admin.get.maps.edit', $post->id) }}" class="btn btn-xs btn-primary" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                <a href="{{ route('admin.post.maps.delete', $post->id) }}" class="btn btn-xs btn-primary" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

@section('subnav')
    <a href="{{ route('admin.get.maps.create') }}" class="btn btn-primary">New Map</a>
@endsection