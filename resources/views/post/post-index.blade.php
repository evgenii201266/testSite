@extends('layouts.app')

@section('title', 'Posts')

@section('content')
<div class="container">
    <div class="row">
      @foreach ($posts as $post)
      <div class="col-lg-3 mod-post">
        <div class="article-title">
          <a href="{{URL::to('post-panel/'. $post->id)}}">
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
      <div class = "col-lg-2 margin-10">
          <a href="{{URL::to('post-panel/'. $post->id) . '/edit'}}" class="btn btn-default width-150">Edit</a>
          {!!Form::open([
            'method'=>'delete',
            'route' =>['post-panel.destroy',$post->id]
          ])!!}
          {!!Form::submit('Delete', ['class' => 'btn btn-danger width-150'])!!}
          {!!Form::close()!!}
          </div>
      @endforeach
    </div>
    {{$posts->links()}}
  </div>
@endsection