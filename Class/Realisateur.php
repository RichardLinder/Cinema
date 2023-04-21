<?php

class Realisateur extends Personne
{
    private array $films;


    public function __construct($nom, $prenom,$sexe)
{
   parent::__construct($nom, $prenom,$sexe);
   $this->films=[];
}


//Lister la filmographie d'un réalisateur (quels sont les films qu'a réalisé ce réalisateur ?)

    /**
     * Get the value of film
     */ 
    public function getFilm()
    {
        return $this->films;
    }

    /**
     * Set the value of film
     *
     * @return  self
     */ 
    public function setFilm($film)
    {
        $this->films = $film;

        return $this;
    }




//-----------------------------------------------methode


public function addFilm (Film $film)
{
    $this->films[]=$film;
}


public function filmographie() 
    {
        $result ="<h2> $this->nom $this->prenom a realisé les film suivant : </h2>";
        foreach ($this->films as $film) 
        {
          $result.= $film->getTitre()."<br>";
        }
    return $result;
    }
}
