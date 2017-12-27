<?php
/**
 * Created by PhpStorm.
 * User: MSI-HASSAN
 * Date: 26/12/2017
 * Time: 16:59
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;



class PokemonController extends Controller
{

    /**
     * @Route("/pokemon", name="pokemon_list")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {
        return $this->render('pokemon/index.html.twig');

    }

}