<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Wink\Wink;
use Wink\WinkPost;

class BlogController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Returns all published blog-posts.
     */
    public function index()
    {
        $posts = WinkPost::with('tags')
            ->live()
            ->orderBy('publish_date', 'DESC')
            ->simplePaginate(15);

        return view('blog.index', [
            'posts' => $posts
        ]);
    }

    /**
     * @param $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * * Returns a single blog-post.
     */
    public function show($slug)
    {
        return view('blog.show', [
            'post' => WinkPost::where('slug', $slug)->first()
        ]);
    }

    // @TODO Implement tags
    /*public function showByTag($tag, $slug)
    {
        return $posts = WinkPost::with('tags')
            ->where('')
            ->live()
            ->orderBy('publish_date', 'DESC')
            ->simplePaginate(12);
    }*/
}
