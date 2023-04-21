<?php

class Genre 
{
    private  array $films;
    private string $nom;


    public function __construct ( string $nom)
    {
        $this->nom = $nom;
        $this->films=[];
    }
                                                                                                                        


//---------------------------------------------------------------------------------------------getter setter
    /**
     * Get the value of noms
     */ 
    public function getNoms()
    {
        return $this->nom;
    }

    /**
     * Set the value of noms
     *
     * @return  self
     */ 
    public function setNoms($noms)
    {
        $this->nom = $noms;

        return $this;
    }

    /**
     * Get the value of films
     */ 
    public function getFilms()
    {
        return $this->films;
    }

    /**
     * Set the value of films
     *
     * @return  self
     */ 
    public function setFilms($films)
    {
        $this->films = $films;

        return $this;
    }


    //-----------------------------------------methode
    
public function addFilm (Film $film)
{
    $this->films[]=$film;
}


public function filmographie() 
    {
        $result ="<h2> $this->nom  a les film suivants : </h2>";
        foreach ($this->films as $film) 
        {
          $result.= $film->getTitre()."<br>";
        }
    return $result;
    }
}