@extends('layouts.app')

@section('content')


 <h1> {{ $haiku->id }} 句の詳細</h1>

        <p>{{ $haiku->first }}</p>
        <p>{{ $haiku->second }}</p>
        <p>{{ $haiku->third }}</p>
            
            {!! link_to_route('haikus.edit', 'この句をあらたむ', ['id' => $haiku->id]) !!}

            {!! Form::model($haiku, ['route' => ['haikus.destroy', $haiku->id], 'method' => 'delete']) !!}
            {!! Form::submit('削除') !!}
    
    {!! Form::close() !!}

@endsection