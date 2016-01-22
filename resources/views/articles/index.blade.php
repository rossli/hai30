@extends('layout.master')
@section('content')
    <div class="row">

        <div class="col-md-8">
            <h1>Articles</h1>
            @foreach( $articles as $article )
                <h2><a href="{{ route('articles.show',$article->id ) }}">{{ $article->title }}</a></h2>
                <p>{{ $article->content }}</p>
            @endforeach
            <div>
                <a class="btn btn-primary" href="{{ route('articles.create') }}">创建新文章</a></div>
        </div>
        <div class="col-md-4">
            @if(Auth::check())
            <h2>你好: {{ Auth::user()->username }}</h2>
                @endif
            <a class="btn btn-primary" href="{{ route('auth.getlogout') }}">注销</a>
        </div>
    </div>
@stop