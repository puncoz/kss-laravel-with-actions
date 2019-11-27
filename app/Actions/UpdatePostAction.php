<?php

namespace App\Actions;

use App\Post;

/**
 * Class UpdatePostAction
 * @package App\Actions
 */
class UpdatePostAction
{
    /**
     * @param array $data
     * @param Post  $post
     *
     * @return Post
     */
    public function execute(array $data, Post $post): Post
    {
        $post->title   = $data['title'];
        $post->content = $data['content'];
        $post->save();

        return $post;
    }
}
