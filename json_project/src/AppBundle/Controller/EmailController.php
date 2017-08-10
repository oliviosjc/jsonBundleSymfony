<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class EmailController extends Controller
{
    /**
     * @Route("/email", name="email")
     */
 public function indexAction(Request $request, \Swift_Mailer $mailer)
{
  $message = \Swift_Message::newInstance()
        ->setSubject('Hello Email')
        ->setFrom('oliviorsneto@gmail.com')
        ->setTo('olivio_sjc@live.com')
        ->setBody("teste1")
        
        ->attach(\Swift_Attachment::fromPath('C:/Users/Suporte/Pictures/a.png'));
    
    $mailer->send($message);

    return new Response("OK");
}

}
