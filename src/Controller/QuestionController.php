<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class QuestionController
{
    /**
     * @Route ("/")
     */
    public function homepage() {
        return new Response('Camelia is my favorite friend!');
    }

    /**
     * @Route("/blog/new-page")
     */

    public function blog() {
        return new Response('New page for my blog');
    }

    /**
     * @Route("/blog/new-page/{slug}")
     */

    public function newpage($slug) {
        return new Response(sprintf('New page for my blog "%s"!', $slug));
    }
}
