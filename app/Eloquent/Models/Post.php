<?php

namespace App\Eloquent\Models;

class Post extends \TCG\Voyager\Models\Post
{
    protected $table = 'posts';

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
