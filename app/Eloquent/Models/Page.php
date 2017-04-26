<?php

namespace App\Eloquent\Models;

class Page extends \TCG\Voyager\Models\Page
{
    protected $table = 'pages';

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
