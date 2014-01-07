<?php
namespace Sdz\Bundle\SoapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class HelloServiceController extends Controller
{
    public function indexAction()
    {
        $path = __DIR__.'/../wsdl/hello.wsdl';
        $server = new \SoapServer($path);
        
        $server->setObject($this->get('hello_service'));

        $response = new Response();
        $response->headers->set('Content-Type', 'text/xml; charset=ISO-8859-1');

        ob_start();
        $server->handle();
        $response->setContent(ob_get_clean());

        return $response;
    }
}