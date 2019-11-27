<?php

namespace App\Http\Controllers;

use App\Actions\CreatePostAction;
use App\Actions\DeletePostAction;
use App\Actions\UpdatePostAction;
use App\Http\Requests\PostRequest;
use App\Post;
use Exception;
use Illuminate\Http\JsonResponse;

/**
 * Class PostController
 * @package App\Http\Controllers
 */
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $posts = Post::all();

        return response()->json($posts);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreatePostAction $action
     * @param PostRequest      $request
     *
     * @return JsonResponse
     */
    public function create(CreatePostAction $action, PostRequest $request): JsonResponse
    {
        $post = $action->execute($request->all());

        return response()->json($post);
    }

    /**
     * Display the specified resource.
     *
     * @param Post $post
     *
     * @return JsonResponse
     */
    public function show(Post $post): JsonResponse
    {
        return response()->json($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdatePostAction $action
     * @param PostRequest      $request
     * @param Post             $post
     *
     * @return JsonResponse
     */
    public function update(UpdatePostAction $action, PostRequest $request, Post $post): JsonResponse
    {
        $post = $action->execute($request->all(), $post);

        return response()->json($post);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DeletePostAction $action
     * @param Post             $post
     *
     * @return JsonResponse
     * @throws Exception
     */
    public function destroy(DeletePostAction $action, Post $post): JsonResponse
    {
        $action->execute($post);

        return response()->json(["status" => "deleted"]);
    }
}
