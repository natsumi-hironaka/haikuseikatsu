@extends('layouts.app')

@section('content')

<h1>徒然なるままに…</h1>

    
<div class="row">
        <div class="col-xs-6">
    {!! Form::model($haiku, ['route' => 'haikus.store']) !!}
        <div class="form-group">
        {!! Form::label('first', '初句:') !!}
        {!! Form::text('first', null, ['class' => 'form-control']) !!}
         </div>
         <div class="form-group">        
        {!! Form::label('second', '二句:') !!}
        {!! Form::text('second', null, ['class' => 'form-control']) !!}
         </div>
        <div class="form-group">
        {!! Form::label('third', '結句:') !!}
        {!! Form::text('third', null, ['class' => 'form-control']) !!}
        </div>

        {!! Form::submit('投句', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}
  </div>
</div>


@endsection