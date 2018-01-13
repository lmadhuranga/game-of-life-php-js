<?php
/**
 * Created by PhpStorm.
 * User: madhuranga
 * Date: 1/12/18
 */

namespace App\Controller;


use App\Services\GridService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class GameController extends Controller
{

    public $colsCount = 10;
    public $rowsCount = 10;

    /**
     * Load the home page with html content
     *
     * @return Response
     */
    public function index()
    {
        return $this->render('game/home_page.html.twig');
    }

    /**
     * Get the current generation data and return next generation prediction
     *
     * @param Request $request
     * @return Response
     */
    public function getNextGen(Request $request)
    {
        // Get form data
        $formData = $request->get('data');
        // Json decaode
        $formData = json_decode($formData);

        //Initiate GridController with width and hieght
        $gridObj = new GridService();
        // Calculate next generation with exsisting generation
        $next = $gridObj->nextGeneration($formData);

        // Convert reposnse to json out put
        $response = new Response();
        $response->setContent(json_encode($next));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

}



