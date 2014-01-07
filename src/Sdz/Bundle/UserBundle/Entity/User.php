<?php
// src/Sdz/Bundle/UserBundle/Entity/User.php

namespace Sdz\Bundle\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="sdz_user")
 */
class User extends BaseUser
{
  /**
   * @ORM\Id
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;
  
  
  /**
   * 
   * @ORM\Column(type="string", nullable=true)
   */
  
  protected $formation;
  
  /**
   * Get formation
   * 
   * @return string formation
   */
  
  public function getFormation()
  {
      return $this->formation;
      
  }
  
  /**
    * Set formation
    *
    * @param string $formation
    * @return User
   */
  public function setFormation($formation)
  {
      $this->formation = $formation;
      
      return $this;
  }
  
  
  public function __toString() {
      
      return $this->email;
  }
}
