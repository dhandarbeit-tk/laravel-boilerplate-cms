<?php

namespace App\Http\Controllers;

use App\Eloquent\Models\Page;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function get_view($page_slug) {
        $page = Page::whereSlug($page_slug)->firstOrFail();

        return view('extensions.pages.pages.view.blade', compact('page'));
    }
}
