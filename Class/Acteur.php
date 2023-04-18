<?php

class Acteur extends Personne

{
    
    private array $auditions;

public function __construct($nom, $prenom,$sexe)
{
   parent::__construct($nom, $prenom,$sexe);
   $this->auditions=[];
}



//-------------------------------------------------------methode


    // Lister la filmographie d'un acteur (dans quels films a-t-il joué ?)

public function filmographie() 
{
    $result ="";
    foreach ($this->auditions as $audition) 
    {
      $result.= $audition->getfilm();
    }
return $result;
}


public function addaddAudition (Audition $audition)
{
    $this->auditions[]=$audition;
}

    /**
     * Get the value of auditions
     */ 
    public function getAuditions()
    {
        return $this->auditions;
    }

    /**
     * Set the value of auditions
     *
     * @return  self
     */ 
    public function setAuditions($auditions)
    {
        $this->auditions = $auditions;

        return $this;
    }
}