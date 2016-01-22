@extends('layout.master')
@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>Create Post</h1>
            @include('articles.partials.errors')
            {!! Form::open(['route' => 'articles.store', 'method' => 'post']) !!}
            {{--这里是一个公用的 表单--}}
            @include('articles.partials.form')
            {!! Form::close() !!}
        </div>
        <div class="col-md-4"></div>
    </div>
@stop