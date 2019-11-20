<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Post
 * @package App
 *
 * @property int    $id
 * @property string $title
 * @property string $content
 * @property string $status
 * @property Carbon $created_at
 * @property Carbon $deleted_at
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
