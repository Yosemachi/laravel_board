@extends('layouts.app')
@section('content')

{{Form::open(['action' => 'boardController@create', 'method' => 'POST'])}}
{{ csrf_field() }}
<div class="mx-auto w-75">
    <h1>Laravel掲示板</h1>
    <div class="form-group mx-auto">
        {{Form::text('message', null, ['class' => 'form-control'])}}
        <div class="col text-center">
            {{Form::submit('送信', ['class' => 'btn btn-primary m-1 w-25'])}}
        </div>
    </div>
</div>
{{ Form::close() }}
<table class="table table-striped mx-auto w-75 m-5">
    @foreach($board as $key=>$value)
    <tr>
        <th>{{$value['name']}}</th>
        <td class="">{{$value['message']}}</td>
        <td><button class="btn btn-primary"><a href="/edit/{{ $value['id'] }}" class=" text-light">編集</a></button></td>
    </tr>
    @endforeach
</table>
@endsection