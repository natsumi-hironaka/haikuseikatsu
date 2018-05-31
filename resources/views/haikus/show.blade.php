@extends('layouts.app')

@section('content')


 <h1> {{ $haiku->id }} 句の詳細</h1>
     <table class="table table-bordered">
         <tr>
            <td>{{ $haiku->third}}</td>
         </tr>
         <tr>
            <td>{{ $haiku->second }}</td>
        </tr>
           <tr>
            <td>{{ $haiku->first}}</td>
         </tr>
    </table>
            {!! link_to_route('haikus.edit', 'この句をあらたむ', ['id' => $haiku->id], ['class' => 'btn btn-success']) !!}

            {!! Form::model($haiku, ['route' => ['haikus.destroy', $haiku->id], 'method' => 'delete']) !!}
            {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    
    {!! Form::close() !!}

@endsection