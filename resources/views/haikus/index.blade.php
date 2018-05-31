@extends('layouts.app')

@section('content')



    <h1>俳句一覧</h1>

    @if (count($haikus) > 0)
        <table  class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($haikus as $haiku)
                <tr><td>{!! link_to_route('haikus.show', $haiku->id, ['id' => $haiku->id]) !!}</td>
                         <td>{{ $haiku->first }}</td>
                         <td>{{ $haiku->second }}</td>
                         <td>{{ $haiku->third }}</td></tr>
        
            @endforeach
            </tbody>
        </table>
    @endif
    
 {!! link_to_route('haikus.create', 'ここで一句！！' ,null, ['class' => 'btn btn-warning']) !!}

@endsection