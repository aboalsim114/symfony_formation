<?php

namespace App\Controller;

use App\Repository\IngredientRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class IngredientController extends AbstractController
{
    #[Route('/ingredient', name: 'app_ingredient', methods: ["GET"])]
    public function index(IngredientRepository $repository, PaginatorInterface $paginator, Request $request): Response
    {


        $ingredients =    $pagination = $paginator->paginate(
            $repository->findAll(),
            $request->query->getInt('page', 1),
            10 /*limit per page*/
        );

        return $this->render('/pages/ingredient/index.html.twig', ["ingredients" => $ingredients]);
    }
}
