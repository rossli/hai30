@extends('layout.master')
@section('content')
    @foreach($lessons->chunk(3) as $row)
        <div class="row">
            @foreach($row as $lesson)
                <div class="col-md-4">
                    <h2>{{ $lesson->title }}</h2>
                    <a href="{{ $lesson->image }}"><img src="{{ $lesson->image }}" width="360" alt=""/></a>
                    <p>{{ $lesson->intro }}</p>
                </div>
            @endforeach
        </div>
    @endforeach
    <div class="row">
        <div class="col-md-4">
            {!! $lessons->render() !!}
            {{--还可以这样哦 , 就是 URLs 传参--}}
{{--            {!! $users->appends(['sort' => 'votes'])->render() !!}--}}
        </div>
    </div>
@stop
