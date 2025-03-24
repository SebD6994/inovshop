<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class FrontController extends AbstractController
{
    #[Route('/', name: 'app_front')]
    public function index(): Response
    {
        return $this->render('front/index.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }


    #[Route('/catalogue', name: 'app_catalogue')]
    public function catalogue(ProductRepository $productRepository): Response
    {
        return $this->render('front/catalogue.html.twig', [
            'products' => $productRepository->findAll(),
        ]);
    }


    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('front/index.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }

    #[Route('/checkout', name: 'app_panier')]
    public function panier(): Response
    {
        return $this->render('front/index.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }

    #[Route('/mariage', name: 'mariage')]
    public function mariage(): Response
    {
        return $this->render('front/mariage.html.twig');
    }

    #[Route('/deuil', name: 'deuil')]
    public function deuil(): Response
    {
        return $this->render('front/deuil.html.twig');
    }

    #[Route('/quotidien', name: 'quotidien')]
    public function quotidien(): Response
    {
        return $this->render('front/quotidien.html.twig');
    }

    #[Route('/atelier', name: 'atelier')]
    public function atelier(): Response
    {
        return $this->render('front/atelier.html.twig');
    }

    #[Route('/abonnement', name: 'abonnement')]
    public function abonnement(): Response
    {
        return $this->render('front/abonnement.html.twig');
    }

    #[Route('/shop', name: 'shop')]
    public function shop(): Response
    {
        return $this->render('front/shop.html.twig');
    }
}
