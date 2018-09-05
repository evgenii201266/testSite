@extends('master')

@section('navbar-brand')
  <a class="navbar-brand wiki" href="{{ url('/wiki') }}">WIKI</a>
@endsection

@section("navbar-left")
<ul class="nav navbar-nav navbar-left">
  <li>
    {!! Form::open(['route' => 'wiki.store','method' => 'get'])!!}
      {{Form::text('title', null, ['class' => 'search'])}}
      @if ($errors->has('title'))
      <div class="help-block">
        <strong>{{ $errors->first('title') }}</strong>
      </div>
      @endif
    {!! Form::close() !!}
  </li>
</ul>
@endsection