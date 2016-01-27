@extends('layout.master')

@section('content')
    <div class="container">
        <h1>欢迎来到这里来啊 </h1>
        <div class="row">
            <dir class="col-md-6">你好</dir>
            <dir class="col-md-6">你好啊 这里是 测试</dir>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row">
            <dir class="col-md-8">
                @section('haha2')
                    @parent
                    新的标题
                @stop

                @section('text2')
                    @parent
                    扩展的内容
                @stop
            </dir>
        </div>
    </div>

    <div class="container">
        @foreach(array_add($a = [2,3,4],33,333) as $v)
            {{ $v }}
            @endforeach

    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8"></div>
            <div class="col-md-4"></div>
        </div>
    </div>
@show