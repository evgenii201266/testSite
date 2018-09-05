@extends('wiki.master')

@section('title','Search')

@section('content')
<div class="container w">

  @if($resultSearch[1] != [])
  <div class="row">

    @for($i = 0; $i < count($resultSearch[1]); $i++)
    <div class="col-lg-7 mod-col">
      <div class="article-title">
        <a href='{{$resultSearch[3][$i]}}'>{{ $resultSearch[1][$i] }}</a>
        <i class="fab fa-wikipedia-w"></i>
      </div>
      <div class="article-text">
       {{$resultSearch[2][$i]}}
      </div>
    </div>
    <div class="col-lg-5 mod-col mod-img">
      <img src="{{$resultSearch['images']["{$resultSearch[1][$i]}"]}}">
    </div>
    @endfor
    
  </div>

  @else
  <div class="article-text">
  <p>{{$resultSearch[0]}} not found</p>
  </div>

  @endif
</div>
@endsection