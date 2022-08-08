@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>
            Posts written by {{$user->name}}
        </h1>
        @include('posts.list', ['posts' => $posts])
    </div>
@endsection
