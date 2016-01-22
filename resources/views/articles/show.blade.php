@extends('layout.master')
@section('content')
    <div class="row">
        <div class="col-md-8">

            <h1>{{ $article->title }}</h1>
            <b>{{ $article->id }}</b>
            <p>{{ $article->content }}</p>
            <b>{{ $article->published_at }}</b>
        </div>
        <div class="col-md-4">
            <a href="{{ route('articles.edit',$article->id) }}" class="btn btn-primary">编辑</a>
        </div>
    </div>
@stop