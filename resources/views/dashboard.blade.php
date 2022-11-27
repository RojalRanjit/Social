@extends('layout.app')
@section('content')
<div>
    <h1 style="text-align: center">Welcome To Dashboard</h1>
    <form action="{{route('logout')}}" method="get" class="container flex-column">
        <button type="submit" name="logout" class="btn btn-danger">Logout</button>
    </form>
</div>
@endsection