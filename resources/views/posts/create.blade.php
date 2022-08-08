@extends('layouts.app')

@section('content')
    <div class="offset-md-3 col-md-6">
        <form id="logout-form" action="{{ route('posts.store') }}" method="POST">
            @csrf
            <input type="text" name="title" id="title" class="form-control" placeholder="Title">
            <textarea type="text" name="body" id="body" class="form-control" placeholder="Content of the post..."></textarea>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>    
@endsection