@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>来たの？</h1>
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            {!! Form::open(['route' => 'login.post']) !!}
                <div class="form-group">
                    {!! Form::label('email', '電子手紙宛先') !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', '合言葉') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('来訪', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}

            <p>{!! link_to_route('signup.get', '一見さんはこちら') !!}</p>
        </div>
    </div>
@endsection