@extends('layouts.app')
@section('content')


<div class="form-group row justify-content-center">
    <div>
        <h1>投稿編集</h1>
        {{Form::open(['action' => 'boardController@save', 'method' => 'POST'])}}
        {{ csrf_field() }}
        {{Form::hidden('id', $board['id'])}}
        <div class="form-group">
            {{Form::textarea('message', $board['message'], ['class' => 'form-control'] )}}
        </div>
        <div class="row justify-content-center">
            <div class="btn-group m-1">
                {{Form::submit('更新', ['class' => 'btn btn-primary'])}}
            </div>
            {{ Form::close() }}
            {{Form::open(['action' => 'boardController@delete', 'method' => 'POST'], ['class' => 'w-25'])}}
            {{ csrf_field() }}
            {{Form::hidden('id', $board['id'])}}
            <div class="btn-group m-1">
                {{Form::submit('削除', ['class' => 'btn btn-primary'])}}
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
@endsection