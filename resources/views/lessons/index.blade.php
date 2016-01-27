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
    </div>
@stop
