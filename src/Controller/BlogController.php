<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog")
     */
    public function index()
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    /**
     * @Route("/blog/{slug}", requirements={"slug"="[a-z0-9-]+"}, name="show")
     */
    public function show($slug)
    {
        if (empty($slug)) {
            $slugResult = "Article Sans Titre";
        }
        else {
            $slugResult = ucwords(str_replace("-", " ", $slug));
        }
        return $this->render('blog/show.html.twig', ["slugResult" => $slugResult]);
    }
}
