@extends('master')

@section('title', 'View')

@section('content')
<div class="container">
  <div class="row">
    @foreach ($posts as $post)
    <div class="col-lg-3 mod-post">
      <div class="article-title">
        <a href="{{URL::to('blogs/'. $post->id)}}">
          <h4>{{$post->title}}</h4>
        </a>
      </div>
      <div>
        <p>{{str_limit($post->body, 100)}}</p>
        <p>
          <i class="fas fa-clock"></i> {{$post->created_at}} &nbsp;&nbsp;
          <i class="fas fa-user-alt"></i> {{$post->name_author}}
        </p>
      </div>
    </div>
    @endforeach
  </div>
  {{$posts->links()}}
</div>
@endsection