<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name' ,null, ['class'=>'form-control'] ) !!}
</div>
<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug',null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submit_text, ['class'=>'btn primary']) !!}
    {!! Form::reset('Clear form', ['class' => 'btn primary']) !!}
</div>
