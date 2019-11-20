<?php

use App\Http\Controllers\PublishPostController;
use Illuminate\Http\Request;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get(
    '/user',
    function (Request $request) {
        return $request->user();
    }
);

Route::group(
    ["prefix" => "/posts"],
    function (Router $router) {
        $router->get("/", "PostController@index");
        $router->post("/", "PostController@create");
        $router->get("/{post}", "PostController@show");
        $router->patch("/{post}", "PostController@update");
        $router->delete("/{post}", "PostController@destroy");

        $router->post("/{post}/publish", "PublishPostController");
    }
);
