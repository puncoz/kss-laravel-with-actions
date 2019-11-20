<?php

namespace App\Actions;

use App\Post;
use Exception;

/**
 * Class DeletePostAction
 * @package App\Actions
 */
class DeletePostAction
{
    /**
     * @param Post $post
     *
     * @return bool
     * @throws Exception
     */
    public function execute(Post $post): bool
    {
        $post->delete();

        return true;
    }
}
