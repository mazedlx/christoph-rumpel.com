<?php

namespace App\Http\Controllers;

use App\Content\Posts;
use Carbon\Carbon;
use Illuminate\Routing\Controller;

class HomeController
{
    public function index(Posts $posts)
    {
        $posts = $posts->published()->simplePaginate(3);

        return view('home.index', [
            'posts' => $posts,
        ]);
    }
}
