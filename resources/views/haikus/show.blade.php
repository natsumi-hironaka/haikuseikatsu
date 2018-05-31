
@extends('layouts.app')

@section('content')




    



 <h4 class="kunoshousai"> {{ $haiku->id }}句 : 
        
        @if ($haiku->updated_at!=null)
        {{$haiku->updated_at}} 
        
        @else 
        {{$haiku->created_at}} 
        
        @endif</h4>

        
         <h2 id="shousai">
           <p> {{ $haiku->first}}</p><br>
           <p> {{ $haiku->second }}</p><br>
           <p>{{ $haiku->third}}</p>
        </h2>
        
        <div class="aratamu">
            {!! link_to_route('haikus.edit', 'この句をあらたむ', ['id' => $haiku->id], ['class' => 'btn btn-success']) !!}
        </div>    
        <div class="kesu">
            {!! Form::model($haiku, ['route' => ['haikus.destroy', $haiku->id], 'method' => 'delete']) !!}
            {!! Form::submit('この句を消す', ['class' => 'btn btn-danger']) !!}
        </div>
        
    {!! Form::close() !!}
    
@endsection