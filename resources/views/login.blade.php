@extends('layouts.app')
@section('content')
<br>

@if(isset(Auth::user()->email))
<script>window.location = "success";</script>
@endif

<div class="col-8 box">
    <div class="justify-content-lg-centre">
    @if($massage = Session::get('error'))
        <div class="alert alert-danger">
            {{$massage}}
        </div>
    @endif
        <h1 class="card-title">Login</h1>
        <form method="post" class="form" action= "{{url('/checklogin')}}">
            @csrf
            <div class="form-group">
                <label for="title">Enter email address</label>
                <input type="email" name="email" id="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="title">Enter password</label>
                <input type="password" name="password" id="title" class="form-control">
            </div>
            <button class="btn btn-info" type="submit">Login</button>
        </form>
    </div>
</div>
@endsection