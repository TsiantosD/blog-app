<div class="row">
    <div class="offset-md-3 col-md-6">
        <div class="row">

            @foreach($posts as $post)
                <div class="col-md-12 card m-2 w-100" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$post->title}}</h5>
                        <p class="card-text">
                            {{Str::limit($post->body, 100)}}
                        </p>

                        <p>
                            Written by: <a href="{{route('user.posts', $post->author->id)}}">
                                {{$post->author->name}}
                            </a>
                        </p>
                        <a href="{{route('posts.show', $post->slug)}}" class="btn btn-primary">Read more...</a>
                    </div>
                </div>
            @endforeach

            {{$posts->links()}}
        </div>

    </div>

</div>
