<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FilterPostRequest;
use App\Http\Requests\Post\StorePostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Services\PostService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AdminPostController extends Controller
{
    public function __construct(private PostService $postService)
    {
    }

    public function index(FilterPostRequest $filterPostRequest): View
    {
        $postFilter = new PostFilter($filterPostRequest->validated());
        $posts = Post::filter($postFilter)->get();

        return view('admin/post/index', ['posts' => $posts]);
    }

    public function create(): View
    {
        return view('admin/post/create', [
            'categories' => Category::all(),
            'tags' => Tag::all()
        ]);
    }
    public function store(StorePostRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $this->postService->store($data);
        return redirect()->route('admin.post.index');
    }

    public function edit(Post $post): View
    {
        return view('admin/post/edit', [
            'post' => $post,
            'categories' => Category::all(),
            'tags' => Tag::all()
        ]);
    }

    public function update(StorePostRequest $request, Post $post): RedirectResponse
    {
        $new_post_data = $request->validated();
        $this->postService->update($post, $new_post_data);

        return redirect()->route('admin.post.edit', $post);
    }

    public function destroy(Post $post): RedirectResponse
    {
        $this->postService->destroy($post);
        return redirect()->route('admin.post.index');
    }
}
