<?php

namespace App\Controllers;

use Wptf\Core\Models\Post;
use Wptf\Core\Response;

class SiteController
{
    /**
     * Home page
     *
     * @return Response
     * @throws \Exception
     */
    public function index(): Response
    {
        $posts = (new Post())
            ->query()
            ->where('post_type', '=', 'post')
            ->andWhere('post_status', '=', 'publish')
            ->orderBy('post_date', 'DESC')
            ->limit(10)
            ->get();

        return Response::view('index', [
            'posts' => $posts->toArray()
        ]);
    }

    /**
     * Page
     *
     * @param string $slug
     * @return Response
     * @throws \Exception
     */
    public function post(string $slug): Response
    {
        $post = (new Post)->query()->where('post_name', '=', $slug)->first();

        return Response::view('post', [
            'post' => $post
        ]);
    }
}