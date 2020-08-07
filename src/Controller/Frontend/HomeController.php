<?php

namespace App\Controller\Frontend;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Bundle;
use App\Entity\Provider;

class HomeController extends AbstractController
{
    /**
    * @Route("/")
    */
    public function index()
    {

        $currency = 'USD';

        $bundles = $this->getDoctrine()->getRepository(Bundle::class)->findAll();

        $providers = $this->getDoctrine()->getRepository(Provider::class)->findAll();

        return $this->render('frontend/home.html.twig', [
            'bundles' => $bundles,
            'currency' => $currency,
            'providers' => $providers
        ]);
    }
}