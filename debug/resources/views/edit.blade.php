@extends('layouts.layout')
@section('content')

<h1>投稿編集</h1>
{{Form::open(['action' => 'boardController@save'])}}
{{Form::hidden('id', $id)}}

{{Form::textarea('notes', $message )}}

{{Form::submit('更新')}}
@endsection