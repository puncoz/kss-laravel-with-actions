<?php

namespace App\Http\Controllers;

use App\Actions\PublishPostAction;
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
     * @param PublishPostAction $action
     * @param Post              $post
     *
     * @return void
     */
    public function __invoke(PublishPostAction $action, Post $post)
    {
        $action->execute($post);

        return response()->json(["status" => "published"]);
    }
}
