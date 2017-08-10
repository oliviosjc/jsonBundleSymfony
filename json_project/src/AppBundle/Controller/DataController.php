<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\json_data;

class DataController extends Controller
{
    /**
     * @Route("/data", name="data")
     */
  public function testeAction()
    {
        $data = $this->getDoctrine()->getRepository(json_data::class)->findAll();
        return $this->render('default/teste.html.twig', array('data'=>$data));

    }

}
