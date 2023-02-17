@extends('layout')

@section('title',  'Create User ')

@section('content')
    <form method="POST" action="{{route('users.store')}}">
        @csrf
        <div class="row mt-3">
            <div class="col">
                <input name="name" type="text" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <input name="email" type="text" class="form-control" placeholder="Email">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <input name="password" type="text" class="form-control" placeholder="Password">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <button type="submit" class="btn btn-success">Create</button>
            </div>
        </div>

    </form>
@endsection
