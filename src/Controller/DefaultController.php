<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    public function index()
    {
        return $this->render('base.html.twig');
    }

    public function login()
    {
        return $this->render('login.html.twig');
    }

    public function register()
    {
        return $this->render('register.html.twig');
    }
}