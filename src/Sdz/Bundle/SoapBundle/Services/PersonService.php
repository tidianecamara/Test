<?php

// src/Sdz/Bundle/SoapBundle/Services/PersonService.php
namespace Sdz\Bundle\SoapBundle\Services;

//use Sdz\Bundle\SoapBundle\Types;

use Zend\Soap;

class HelloService {
    
    
    /**
     * 
     * @param string $name
     * @param string $prenom
     */
    public function Hello($name, $prenom){
        
        return $nom." ".$prenom;
    }
}


$server = new Zend\Soap\Server(null, $options);
$server->setClass('HelloService');
$server->handle();