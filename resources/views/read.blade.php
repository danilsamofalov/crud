@extends('layout')

@section('title',  'READ ' . $user->name)

@section('content')

    <a type="button" class="btn btn-secondary" href="{{route('users.index')}}">Back to users</a>
    <div class="card mt-3" style="width: 18rem;">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">ID: {{$user->id}}</li>
            <li class="list-group-item">Name: {{$user->name}}</li>
            <li class="list-group-item">Email: {{$user->email }}</li>
            <li class="list-group-item">Password: {{$user->password }}</li>
            <li class="list-group-item">Created: {{$user->created_at->format('d/m/y H:i:s')}}</li>
            <li class="list-group-item">Updated: {{$user->updated_at->format('d/m/y H:i:s')}}</li>
        </ul>
    </div>

    <a type="button" class="btn btn-warning mt-3" href="{{route('users.edit', $user )}}">Update</a>
    <form method="POST" action="{{route('users.destroy', $user)}}">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger mt-3" type="submit">Delete</button>

@endsection
