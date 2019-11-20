<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Post
 * @package App
 */
class Post extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        "title",
        "content",
        "status",
    ];
}
