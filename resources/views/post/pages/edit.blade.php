@extends('layouts.app')

@section('title', 'Edit')

@section('content') 
{!!Form::model($post, array('route' => array('post-panel.update',$post->id), 'method'=> 'PUT'))!!}
<div class="form-group">
  <div class="col-md-8 margin-10">
    {{Form::label('title', 'Post title'), ['class' => 'control-label']}} 
    {{Form::text('title', null, ['class' => 'form-control', 'disabled'])}}
  </div>
</div>
      
<div class="form-group">
  <div class="col-md-8 margin-10">
    {{Form::label('body', 'Post text')}}
    {{Form::textarea('body', null, ['class' => 'form-control'])}}
    @if ($errors->has('body'))
    <div class="alert alert-danger">
      <strong>{{ $errors->first('body') }}</strong>
    </div>
    @endif
  </div>
</div>

<div class="form-group">
  <div class="col-md-8 margin-10">
    {{Form::submit('Confirm', ['class' => 'btn btn-primary'])}}
  </div>
</div>
{!! Form::close() !!}
@endsection
