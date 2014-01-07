<?php 
// src/Sdz/Bundle/SoapBundle/Services/HelloService.php
namespace Sdz\Bundle\SoapBundle\Services;

class HelloService
{
    private $mailer;

    public function __construct(\Swift_Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function hello($name)
    {

        $message = \Swift_Message::newInstance()
                                ->setTo('me@example.com')
                                ->setSubject('Hello Service')
                                ->setBody($name . ' dit bonjour !');

        $this->mailer->send($message);


        return 'Bonjour, '.$name;
    }
}
