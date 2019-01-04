<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 1/4/2019
 * Time: 12:19 PM
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
{
    /**
     * @Route("/")
     *
     * @param Request $request
     *
     * @return Response
     */
    public function homepage(Request $request): Response
    {
        return new Response('Woohoo - new Symfony4 page @ ' . $request->getUri() . ' URI');
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show(string $slug)
    {
        return new Response('Show article page :: ' . ucfirst(str_replace('-', ' ', $slug)));
    }
}