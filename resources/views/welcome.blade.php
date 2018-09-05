@extends('master')

@section('title','Welcome')

@section('content')
<div id="headerwrap">
  <div class="container">
    <div class="row centered">
      <div class="col-lg-8 col-lg-offset-2">
        <h1>All the juiciest</h1>
      </div>
    </div>
  </div>
</div>

<br>
<div class="container">
  <div class="row centered">
    <br>
    <br>
    <div class="col-lg-4">
      <i class="fab fa-wikipedia-w"></i>
      <div class="article-title">
          <a href="{{route('wiki.index')}}">Wiki Search </a>
      </div>
      <div class="text-format">
        <p>
            Request to search the wiki and obtain results.
        </p>
        <p>Just do it</p>
      </div>
      <div class="col-lg-4">
          <img class = "image-style" src="http://4.bp.blogspot.com/_C3QGqbgCb9k/S6fK6wjjogI/AAAAAAAAAL8/hDvbSVqdwEI/s350/wiki.png">
      </div>
    </div>
    <div class="col-lg-4">
      <i class="fas fa-hand-holding-heart"></i>
      <div class="article-title">
        <a href="{{route('post.index')}}">Blog </a>
      </div>
      <div class="text-format">
        <p>
        View or <a href="{{route('post-panel.create')}}">create</a> a beautiful post that fits your want.</p>
        <p>Just do it</p>
      </div>
      <div class="col-lg-4">
        <img class = "image-style" src = "https://3.bp.blogspot.com/-YTcavYuOS9E/WIN8AfDFOyI/AAAAAAAACXw/Jd3y33GGowEo7gpSUY3ISiVAZcCTEV2tQCLcB/s320/Yang%2BMempengaruhi%2BHarga%2BBlog.jpg">
      </div>
    </div>
    <div class="col-lg-4">
      <div id = "app" class="article-title">
        <quotes-component></quotes-component>
      </div>
    </div>
  </div>
</div>
<br>
@endsection