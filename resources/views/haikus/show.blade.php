
@extends('layouts.app')

@section('content')


 <h1> {{ $haiku->id }} 句の詳細</h1>
 

         <h3 id="shousai">
            {{ $haiku->first}}<br>
         
         
            {{ $haiku->second }}<br>
        
        
            {{ $haiku->third}}
        </h3>
            {!! link_to_route('haikus.edit', 'この句をあらたむ', ['id' => $haiku->id], ['class' => 'btn btn-success']) !!}

            {!! Form::model($haiku, ['route' => ['haikus.destroy', $haiku->id], 'method' => 'delete']) !!}
            {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    
    {!! Form::close() !!}

@endsection