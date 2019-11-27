<?php

namespace App\Actions;

use App\Jobs\SendTweet;
use App\Post;

/**
 * Class PublishPostAction
 * @package App\Actions
 */
class PublishPostAction
{
    /**
     * @param Post $post
     */
    public function execute(Post $post): void
    {
        $this->markAsPublished($post);

        $this->tweet($post->title);
    }

    /**
     * @param Post $post
     */
    public function markAsPublished(Post $post): void
    {
        $post->status = "published";

        $post->save();
    }

    /**
     * @param string $text
     */
    protected function tweet(string $text): void
    {
        dispatch(new SendTweet($text));
    }
}
