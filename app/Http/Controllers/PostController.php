<?php

namespace App\Http\Controllers;

use App\Post;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

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
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function create(Request $request): JsonResponse
    {
        $post          = new Post();
        $post->title   = $request->input("title");
        $post->content = $request->input("content");
        $post->save();

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
     * @param Request $request
     * @param Post    $post
     *
     * @return JsonResponse
     */
    public function update(Request $request, Post $post): JsonResponse
    {
        $post->title   = $request->input("title");
        $post->content = $request->input("content");
        $post->save();

        return response()->json($post);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Post $post
     *
     * @return JsonResponse
     * @throws Exception
     */
    public function destroy(Post $post): JsonResponse
    {
        $post->delete();

        return response()->json(["status" => "deleted"]);
    }
}
