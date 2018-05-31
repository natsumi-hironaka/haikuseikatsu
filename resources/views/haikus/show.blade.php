
@extends('layouts.app')

@section('content')


 <h4 class="kunoshousai"> {{ $haiku->id }} 句の詳細</h4>

        
         <h2 id="shousai">
            {{ $haiku->first}}<br>
         
         
            {{ $haiku->second }}<br>
        
        
            {{ $haiku->third}}
        </h2>
        
        <div class="aratamu">
            {!! link_to_route('haikus.edit', 'この句をあらたむ', ['id' => $haiku->id], ['class' => 'btn btn-success']) !!}

            {!! Form::model($haiku, ['route' => ['haikus.destroy', $haiku->id], 'method' => 'delete']) !!}
            {!! Form::submit('この句を消す', ['class' => 'btn btn-danger']) !!}
        </div>
        
    {!! Form::close() !!}
    
@endsection