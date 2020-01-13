@extends('layouts.app')
@section('content')

<h1>Laravel掲示板</h1>
{{Form::open(['action' => 'boardController@create', 'method' => 'POST'])}}
{{ csrf_field() }}

{{Form::text('message')}}

{{Form::submit('送信')}}
{{ Form::close() }}
<table>
    @foreach($board as $key=>$value)
    <tr>
        <th>{{$value['name']}}</th>
        <td>{{$value['message']}}</td>
        <td><button><a href="/edit/{{ $value['id'] }}">編集</a></button></td>
    </tr>
    @endforeach
</table>
@endsection