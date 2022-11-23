@extends('layout.app')

@section('content')
<h1 style="text-align: center">Register</h1>
<form class="container flex-column" method="post" action="{{route('registerUser')}}">
    @csrf
  <div class="mb-3">
    <label for="exampleInputName" class="form-label">Name</label>
    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="exampleInputName">
    @error('name')
        <div class="invalid-feedback">
        {{$message}}
        </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    @error('email')
        <div class="invalid-feedback">
        {{$message}}
        </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1">
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
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection