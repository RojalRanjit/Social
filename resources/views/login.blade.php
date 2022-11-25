@extends('layout.app')

@section('content')
<div class="container shadow p-3 mb-5 mt-5 bg-body rounded" style="width: 500px">
@if(Session::has('fail'))
<div class="alert alert-danger" role="alert">
  {{Session::get('fail')}}
</div>
@endif
<h1 style="text-align: center">Login</h1>
<form class="container flex-column" action="{{route('dashboard')}}" method="post">
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
    @error('email')
        <div class="invalid-feedback">
        {{$message}}
        </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1">
    @error('password')
        <div class="invalid-feedback">
        {{$message}}
        </div>
    @enderror
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="remember">
    <label class="form-check-label" for="remember_me">Remember Me</label>
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
</form>
</div>
@endsection