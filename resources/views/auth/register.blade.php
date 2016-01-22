@extends('layout.master')
@section('content')
    <div class="col-md-4 col-offset-4">
        @include('articles.partials.errors')
        {!! Form::open(['route' => 'auth.postregister', 'method' => 'post']) !!}
        <div class="form-group">
            {!! Form::label('username', 'Username', ['class' => 'control-label']) !!}
            {!! Form::text('username', null, ['class' => 'form-control','placeholder'=>'请输入用户名']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
            {!! Form::text('email', null, ['class' => 'form-control','placeholder'=>'请填写Email']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password', 'Password', ['class' => 'control-label']) !!}
            {!! Form::password('password',['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password_confirmation', 'Password_confirmation', ['class' => 'control-label']) !!}
            {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Submit', ['class' => 'form-control']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@stop