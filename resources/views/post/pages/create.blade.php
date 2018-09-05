@extends('layouts.app')

@section('title','Create')

@section('content') 
{!! Form::open(['route' => 'post-panel.store']) !!}
<div class="form-group">
  <div class="col-md-8 margin-10">
    {{Form::label('title', 'Post title'), ['class' => 'control-label']}} 
    {{Form::text('title', null, ['class' => 'form-control'])}}
    @if ($errors->has('title'))
    <div class="alert alert-danger">
      <strong>{{ $errors->first('title') }}</strong>
    </div>
    @endif
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