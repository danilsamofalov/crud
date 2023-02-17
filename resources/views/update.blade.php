@extends('layout')

@section('title', 'Update User')

@section('content')
    <a type="button" class="btn btn-secondary" href="{{route('users.index')}}">Back</a>
    <form method="POST"
          @if(isset($user))
          action="{{route('users.update', $user)}}" class="mt-3"
        @else
            action="{{route('users.update')}}"
        @endif
            class="mt-3">
        @csrf
        @isset($user)
            @method('PUT')
        @endisset
        <div class="row mt-3">
            <div class="col">
                <input name="name"
                       value="{{isset($user) ? $user->name : null}}"
                       type="text" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <input name="email"
                       value="{{isset($user) ? $user->email : null}}"
                       type="text" class="form-control" placeholder="Email">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <input name="password" type="text" class="form-control" placeholder="New Password">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <button type="submit" class="btn btn-success">Create</button>
            </div>
        </div>

    </form>
@endsection
