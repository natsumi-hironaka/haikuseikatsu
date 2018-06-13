
@if (Auth::user()->is_liking($haiku->id))
    {!! Form::open(['route' => ['user.unlike', $haiku->id], 'method' => 'delete']) !!}
        {!! Form::submit('💗', ['class' => "btn btn-default btn-xs"]) !!}
    {!! Form::close() !!}
@else
    {!! Form::open(['route' => ['user.like', $haiku->id]]) !!}
        {!! Form::submit('💜', ['class' => "btn btn-default btn-xs"]) !!}
    {!! Form::close() !!}
@endif
