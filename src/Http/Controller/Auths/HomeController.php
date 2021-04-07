<?php


namespace App\Http\Controller\Auths;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class HomeController
 * @package App\Http\Controller\Auths
 * @author jaures kano <ruddyjaures@mail.com>
 */
class HomeController extends AbstractController
{
    /**
     * @Route("/" , name="login")
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('dashboard/dashboard_index.html.twig');
    }

}