@extends('layouts.app')

@section('title', 'Show')

@section('content')
<h1>{{$post->title}}</h1>
<br>
<h4>
  <i class="fas fa-user-ninja"> {{$post->name_author}}</i> {{$post->created_at}}
</h4>
<br>
<p class="text-justify"> {{$post->body}}</p>
<a href = "{{URL::to('post-panel/'. $post->id) . '/edit'}}" class = "btn btn-default width-150">Edit</a>

{!!Form::open([
  'method'=>'delete',
  'route' =>['post-panel.destroy',$post->id]
   ])!!}
{!!Form::submit('Delete', ['class' => 'btn btn-danger width-150'])!!}
{!!Form::close()!!}
@endsection