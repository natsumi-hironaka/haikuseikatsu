@extends('layouts.app')

@section('content')
    @if (Auth::check())
        @if(count($haikus)>0)
            @include('haikus.index',['haikus' => $haikus])
        @endif
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to the haiku</h1>
                {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection