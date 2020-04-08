@extends('layouts.app')
@section('content')
<br>
  <div class="col-12 box">
  @if(isset(Auth::user()->email))
    <h2>Welcome {{ Auth::User()->email }}</h2>
    <a href="{{ url('/logout') }}">Logout</a>
  @else
      <script>window.location = "/login";</script>
  @endif
  </div>
@endsection