<?php

class Realisateur
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
        return $this->film;
    }

    /**
     * Set the value of film
     *
     * @return  self
     */ 
    public function setFilm($film)
    {
        $this->film = $film;

        return $this;
    }


    
public function addFilm (Film $film)
{
    $this->films[]=$film;
}
}
