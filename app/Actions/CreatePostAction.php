<?php

namespace App\Actions;

use App\Post;

/**
 * Class CreatePostAction
 * @package App\Actions
 */
class CreatePostAction
{
    /**
     * @param array $data
     *
     * @return Post
     */
    public function execute(array $data): Post
    {
        $post          = new Post();
        $post->title   = $data['title'];
        $post->content = $data['content'];
        $post->save();

        return $post;
    }
}
