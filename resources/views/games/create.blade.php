@section('content')

    {!! Form::open(['route' => 'admin.post.games.create', 'id' => 'create-game', 'files' => true]) !!}
    <div class="card card-default">
        <div class="card-header"><h4>Create Game</h4></div>
        <div class="card-body">
            <div class="form-group">
                <label for="">Name</label>
                {!! Form::text('name', isset($post->name) ? $post->name : null, ['class' => 'form-control']); !!}
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
