@extends('layout.master')
@section('content')
    <div class="row">
        <div class="col-md-4 col-offset-4">
            {!! Form::open(['route' => 'auth.postlogin', 'method' => 'post']) !!}
            <div class="form-group">
                {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
                {!! Form::text('email', null, ['class' => 'form-control','placeholder'=>'请填写Email']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('password', 'Password', ['class' => 'control-label']) !!}
                {!! Form::password('password',['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Submit', ['class' => 'form-control']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop