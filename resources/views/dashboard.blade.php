@extends('layout.app')

@section('content')
<div>
    <h1 style="text-align: center">Welcome To Dashboard</h1>
    <form action="{{route('login')}}" method="post" class="container flex-column">
        <button type="button" class="btn btn-danger">Logout</button>
    </form>
</div>
@endsection