<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index() {
        // $posts = DB::table('posts')->orderBy('id')->paginate(10);
        // $posts = Post::select(['id', 'title', 'body', 'author', 'links'])::paginate(10);
        // $posts = DB::table('posts')->get();
        // $posts = Post::paginate(10);
        // $posts = DB::table('posts')->get();
        $posts = Post::simplePaginate(10);

        return view('posts.index', compact('posts'));
    }

    public function view($slug) {
        $post = Post::where('slug', $slug)->firstOrFail();

        return view('posts.view', compact('post'));
    }
}
