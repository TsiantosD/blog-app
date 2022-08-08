@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 card m-2 w-100" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>
                    <p class="card-text">
                        {{$post->body}}
                    </p>
                </div>
            </div>
        </div>

        <div>
            Written by: <a href="{{route('user.posts', $post->author->id)}}">
                {{$post->author->name}}
            </a>
        </div>

        <div>
            Published at {{$post->published_at}}
        </div>
    </div>


@endsection
