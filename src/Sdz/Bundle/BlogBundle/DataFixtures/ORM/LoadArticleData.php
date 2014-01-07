<?php 
// src/Sdz/BlogBundle/DataFixtures/ORM/LoadArticleData.php

namespace Sdz\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Sdz\Bundle\BlogBundle\Entity\Article;


class LoadArticleData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        
        
        for($i=0; $i<10; $i++){
            $article = new Article();
            $article->setAuteur("Auteur $i");
            $article->setContenue("contenue de l'article $i");
            $article->setDate( new \DateTime() );
            $article->setTitre("Titre $i");
            $article->setPublication(1);
            
            $document =  new \Sdz\Bundle\BlogBundle\Entity\Document();
            $document->setName("document N° $i");
            $document->setPath("uploads/doc_$i");
  
            $article->setDocument($document);
           
   
            $manager->persist($article);
        }
        $manager->flush();
    }
}