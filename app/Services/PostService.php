<?php

namespace App\Services;

use App\Models\Post;

class PostService
{
    public function store(array $data): Post
    {
        $post['author'] = 'new author';
        $tags = $data['tags'];
        unset($data['tags']);
        $post = Post::create($data);
        $post->tags()->attach($tags);

        return $post;
    }

    public function update(Post $post, array $new_post_data): Post
    {
        $tags = $new_post_data['tags'] ?? [];
        unset($new_post_data['tags']);
        $post->update($new_post_data);
        $post = $post->fresh();
        $post->tags()->sync($tags);
        return $post;
    }

    public function destroy(Post $post): void
    {
        $post->delete();
    }
}
