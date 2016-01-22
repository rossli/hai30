<div class="form-group">
    {!! Form::label('title', '文章标题', ['class' => 'control-label']) !!}
    {!! Form::text('title', null , ['class' => 'form-control','placeholder'=>'请填写文章的标题']) !!}
</div>
<div class="form-group">
    {!! Form::label('content', '内容', ['class' => 'control-label']) !!}
    {!! Form::textarea('content', null,['class'=>'test','style'=>'width:600px;overflow-y:hidden']) !!}
</div>
<div class="form-group">
    {!! Form::label('published_at', '发布时间', ['class' => 'control-label']) !!}
    {!! Form::input('date','published_at', date('Y-m-d'), ['class' => 'form-control','palceholder'=>'发布时间']) !!}
</div>
<div class="form-group">
    {!! Form::submit('Submit', ['class' => 'form-control']) !!}
</div>