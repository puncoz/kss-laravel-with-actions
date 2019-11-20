<?php

namespace App\Http\Controllers;

use App\Jobs\SendTweet;
use App\Post;

/**
 * Class PublishPostController
 * @package App\Http\Controllers
 */
class PublishPostController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Post $post
     *
     * @return void
     */
    public function __invoke(Post $post)
    {
        $post->markAsPublished();

        dispatch(new SendTweet($post->title));

        return response()->json(["status" => "published"]);
    }
}
