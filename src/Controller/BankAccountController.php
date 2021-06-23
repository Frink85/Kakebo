<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BankAccountController extends AbstractController
{
    /**
     * @Route("/bank/account", name="bank_account")
     */
    public function index(): Response
    {
        return $this->render('bank_account/index.html.twig', [
            'controller_name' => 'BankAccountController',
        ]);
    }
}
