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
            ->where('post_status', '=', 'publish')
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
     * @param string $page
     * @return Response
     * @throws \Exception
     */
    public function page(string $page): Response
    {
        $post = (new Post)->query()->where('post_name', '=', $page)->first();

        return Response::view('page', [
            'page' => $post
        ]);
    }
}