@extends('master')

@section('title', 'Posts')

@section('content')
<div class="container">
<h1>{{$post->title}}</h1>
<br>
<h4>
  <i class="fas fa-user-ninja"> {{$post->name_author}}</i> {{$post->created_at}}
</h4>
<br>
<p class="text-justify"> {{$post->body}}</p>
</div>
@endsection