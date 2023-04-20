<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class QuestionController extends AbstractController
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

//    public function newPage($slug) {
//        return new Response(sprintf('New page for my blog "%s"!',
//            ucwords(str_replace('-',' ', $slug))
//        ));
//    }

    public function newPage ($slug)
    {
        $answers = [
            'Make sure your cat is sitting purrrfectly still ?',
            'Honestly, I like furry shoes better than MY cat',
            'Maybe... try saying the spell backwards?',
            ];
    return $this->render('newPage.html.twig', [
        'newPage' => ucwords(str_replace('-', ' ', $slug)),
        'answers' => $answers,
    ]);
    }
}
