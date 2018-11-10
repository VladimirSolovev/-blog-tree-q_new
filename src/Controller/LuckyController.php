<?php
/**
 * Created by PhpStorm.
 * User: vladimir
 * Date: 10/11/18
 * Time: 17:09
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{

    /**
     * @Route("/lucky/number")
     */
    public function number()
    {
        $number = rand(0, 100);

        return $this->render('lucky/number.html.twig', ['number' => $number]);
    }
}