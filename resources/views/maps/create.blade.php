@section('content')

    {!! Form::open(['route' => 'admin.post.maps.create', 'id' => 'create-map', 'files' => true]) !!}
    <div class="card card-default">
        <div class="card-header"><h4>Map</h4></div>
        <div class="card-body">
            <div class="form-group">
                <label for="">Name</label>
                {!! Form::text('name', isset($post->name) ? $post->name : null, ['class' => 'form-control']); !!}
            </div>

            <div class="form-group">
                <label for="">Game</label>
                {!! Form::select('game_id', $games, null,['class' => 'form-control']); !!}
            </div>

            <div class="form-group">
                <label for="">Image</label>
                {!! Form::file('image', ['class' => 'form-control-file']); !!}
            </div>

        </div>
        <div class="card-footer">
            <a href="#" class="btn btn-secondary">Cancel</a>
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </div>
    </form>

@endsection
