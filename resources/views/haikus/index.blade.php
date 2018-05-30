@extends('layouts.app')

@section('content')



    <h1>俳句一覧</h1>

    @if (count($haikus) > 0)
        <ul>
            @foreach ($haikus as $haiku)
                <tr><li>{!! link_to_route('haikus.show', $haiku->id, ['id' => $haiku->id]) !!} </li>
                     <li>{{ $haiku->first }}</li>
                    <li>{{ $haiku->second }}</li>
                    <li>{{ $haiku->third }}</li></tr>
            @endforeach
        </ul>
    @endif

 {!! link_to_route('haikus.create', 'ここで一句！！') !!}

@endsection