<?php
/**
 * Created by PhpStorm.
 * User: MSI-HASSAN
 * Date: 28/12/2017
 * Time: 10:30
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class HomeController extends Controller
{
    /**
     * @Route("/", name="home_page")
     */
    public function indexAction(Request $request)
    {
        return $this->render('home/index.html.twig');
    }
}