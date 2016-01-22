@extends('layout.master')
@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>Edit Post</h1>
            @include('articles.partials.errors')
            {!! Form::model($article,['route' => ['articles.update',$article->id], 'method' => 'patch']) !!}
            @include('articles.partials.form')
            {!! Form::close() !!}
        </div>
        <div class="col-md-4">
        </div>
    </div>

@stop