@extends('layouts.app')

@section('content')

<h1>徒然なるままに…</h1>

    

    {!! Form::model($haiku, ['route' => 'haikus.store']) !!}

        {!! Form::label('first', '初句:') !!}
        {!! Form::text('first') !!}
        {!! Form::label('second', '二句:') !!}
        {!! Form::text('second') !!}
        {!! Form::label('third', '結句:') !!}
        {!! Form::text('third') !!}
        

        {!! Form::submit('投句') !!}

    {!! Form::close() !!}


@endsection