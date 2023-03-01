<?php

namespace App\Http\Controllers;

use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FilterPostRequest;
use App\Models\Post;
use Illuminate\View\View;

class PostController extends Controller
{

    public function index(FilterPostRequest $request): View
    {
        $filter = new PostFilter($request->validated());
        $posts = Post::filter($filter);
        return view('post/index', ['posts' => $posts->paginate(100)]);
    }

    public function show(Post $post): View
    {
        return view('post/show', ['post' => $post]);
    }
}
