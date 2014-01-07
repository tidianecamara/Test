<?php

// src/Sdz/Bundle/BlogBundle/Entity/Document.php

namespace Sdz\Bundle\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Document {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    public $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $path;

    /**
     * @Assert\File(maxSize="6000000")
     */
    public $file;
    
    
    // propriété utilisé temporairement pour la suppression
    private $filenameForRemove;

    /**
     * 
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload() {
        if (null !== $this->file) {
            
           // On stock que l'extension du fichier car le nom c'est l'id.
            $this->path = $this->file->guessExtension();
            // tout faire pour avoir un nom de fichier unique
            //$this->path = sha1(uniqid(mt_rand(), true)).'.'.$this->file->guessExtension();
        }
    }

    /**
     * Déplacement du fichier dans le repertoire d'upload
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload() {
        if (null === $this->file) {
            return;
        }

        // vous devez lancer une exception ici si le fichier ne peut pas
        // être déplacé afin que l'entité ne soit pas persistée dans la
        // base de données comme le fait la méthode move() de UploadedFile
        $this->file->move($this->getUploadRootDir(), $this->id . '.' . $this->file->guessExtension());

        unset($this->file);
    }

    /**
     * @ORM\PreRemove()
     */
    public function storeFilenameForRemove() {
         //On sauvegarde temporairement le nom du fichier, car il dépend de l'id
        $this->filenameForRemove = $this->getAbsolutePath();         
    }

    /**
     * @ORM\PostRemove()
     */
    public function removeUpload() {
        if (file_exists($this->filenameForRemove)) {
            unlink($this->filenameForRemove);
        }
    }

    
    public function getAbsolutePath() {
        return null === $this->path ? null : $this->getUploadRootDir() . '/' . $this->id . '.' . $this->path;
    }

    
    public function getWebPath() {
        return null === $this->path ? null : $this->getUploadDir() . '/' . $this->id.".".$this->path;
    }

    
    protected function getUploadRootDir() {
        // le chemin absolu du répertoire où les documents uploadés doivent être sauvegardés
        return __DIR__.'../../../../../../web/img/'.$this->getUploadDir();
    }

    
    protected function getUploadDir() {
        // on se débarrasse de « __DIR__ » afin de ne pas avoir de problème lorsqu'on affiche
        // le document/image dans la vue.
        return 'img/uploads';
    }

    
    
   public  function setName($name) {
        
       $this->name = $name;
       return $this;
    }
    
    
    public  function setPath($path) {
       $this->path = $path;
       return $this;
    }
}
