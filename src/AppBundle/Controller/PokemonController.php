<?php


namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
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