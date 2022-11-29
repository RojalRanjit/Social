@extends('layout.app')
@section('content')
<div>
    <h1 style="text-align: center">Welcome To Dashboard</h1>
    <form action="{{route('logout')}}" method="get" class="container flex-column">
        <button type="submit" name="logout" class="btn btn-danger">Logout</button>
    </form>
    <table class="table">
        <thead>
            <th>Article Title</th>
            <th>Created By</th>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <td>{{$post-title}}</td>
                <td>{{$post->user->name}}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection