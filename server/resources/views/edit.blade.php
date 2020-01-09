@extends('layouts.layout')
@section('content')

<h1>投稿編集</h1>
{{Form::open(['action' => 'boardController@save', 'method' => 'GET'])}}
{{ csrf_field() }}
{{Form::hidden('id', $board['id'])}}

{{Form::textarea('message', $board['message'] )}}

{{Form::submit('更新')}}
{{ Form::close() }}
@endsection