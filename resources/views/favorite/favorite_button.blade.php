@if (Auth::user()->is_favorite($micropost->id))
    {!! Form::open(['route' => ['unfavorite', $micropost->id], 'method' => 'delete']) !!}
        {!! Form::submit('Unfavorite', ['class' => 'btn btn-danger btn-xs']) !!}
    {!! Form::close() !!}
@else
    {!! Form::open(['route' => ['favorite', $micropost->id]]) !!}
        {!! Form::submit('Favorite', ['class' => 'btn btn-primary btn-xs']) !!}
    {!! Form::close() !!}
@endif