<?php

namespace Sdz\Bundle\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 * 
 * @ORM\Entity()
 * 
 */
class Article
{
   /**
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
    private $id;

    /**
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\Column(name="auteur", type="string", length=255)
     */
    private $auteur;

    /**
     * @ORM\Column(name="date", type="datetime", length=255)
     */
    private $date;

    /**
     * @ORM\Column(name="contenue", type="string", length=255)
     */
    private $contenue;

    /**
     * @ORM\Column(name="publication", type="boolean", length=255)
     */
    private $publication;

   /**
    * @ORM\OneToOne(targetEntity="Sdz\Bundle\BlogBundle\Entity\Document", cascade={"persist", "remove"})
   */
    private $document;
 
    
    

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Article
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    
        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set auteur
     *
     * @param string $auteur
     * @return Article
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
    
        return $this;
    }

    /**
     * Get auteur
     *
     * @return string 
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Article
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set contenue
     *
     * @param string $contenue
     * @return Article
     */
    public function setContenue($contenue)
    {
        $this->contenue = $contenue;
    
        return $this;
    }

    /**
     * Get contenue
     *
     * @return string 
     */
    public function getContenue()
    {
        return $this->contenue;
    }

    /**
     * Set publication
     *
     * @param boolean $publication
     * @return Article
     */
    public function setPublication($publication)
    {
        $this->publication = $publication;
    
        return $this;
    }

    /**
     * Get publication
     *
     * @return boolean 
     */
    public function getPublication()
    {
        return $this->publication;
    }

    /**
     * Set document
     *
     * @param \Sdz\Bundle\BlogBundle\Entity\Document $document
     * @return Article
     */
    public function setDocument(\Sdz\Bundle\BlogBundle\Entity\Document $document = null)
    {
        $this->document = $document;
    
        return $this;
    }

    /**
     * Get document
     *
     * @return \Sdz\Bundle\BlogBundle\Entity\Document 
     */
    public function getDocument()
    {
        return $this->document;
    }
}