<?php

class Realisateur
{
    private Film $film;

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
}
