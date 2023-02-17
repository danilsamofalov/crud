@extends('layout')

@section('title',  'CREATE User')

@section('content')
    <form method="POST" action="{{route('users.store')}}">
        @csrf
        <div class="row mt-3">
            <div class="col">
                <input name="name"
                       type="text" class="form-control" placeholder="Name" aria-label="name">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <input name="email" type="text" class="form-control" placeholder="Email" aria-label="email">
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <input name="password" type="text" class="form-control" placeholder="Password" aria-label="password">
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <button type="submit" class="btn btn-success">Create</button>
            </div>
        </div>
        <a type="button" class="btn btn-secondary mt-3" href="{{route('users.index')}}">Back to users</a>

    </form>
@endsection
