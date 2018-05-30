@extends('layouts.app')

@section('content')


<h1>{{ $haiku->id }}句の読み直し </h1>

    {!! Form::model($haiku, ['route' => ['haikus.update', $haiku->id], 'method' => 'put']) !!}

        {!! Form::label('first', '初句:') !!}
        {!! Form::text('first') !!}
        {!! Form::label('second', '二句:') !!}
        {!! Form::text('second') !!}
        {!! Form::label('third', '結句:') !!}
        {!! Form::text('third') !!}
        
        {!! Form::submit('移ろひ') !!}

    {!! Form::close() !!}

@endsection