<?php

class Acteur extends Personne


{
    
    private array $auditions;

    public function __construct( string $nom, string $prenom, string $sexe)
    {
    parent::__construct($nom, $prenom,$sexe);
    $this->auditions=[];
    
    }




    /**
     * Get the value of auditions
     */ 
    public function getAudition()
    {
        return $this->auditions;
    }

    /**
     * Set the value of auditions
     *
     * @return  self
     */ 
    public function setAudition($audition)
    {
        $this->auditions = $audition;

        return $this;
    }
    //-------------------------------------------------------methode


    // Lister la filmographie d'un acteur (dans quels films a-t-il joué ?)


    public function filmographie() 
    {
        $result ="<h2> $this->nom $this->prenom a jouer :.</h2>";
        foreach ($this->auditions as $audition) 
        {
          $result.= $audition->filmographie()."<br>";
        }
    return $result;
    }

    public function addAudition (Audition $audition)
    {
        $this->auditions[]=$audition;
    }

}