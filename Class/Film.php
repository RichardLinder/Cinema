<?php
class Film 
{

    private string $titre;
    private Datetime $dateDeSortieFrance;
    private int $dure;
    private Realisateur $realisateur;
    private string  $synopsis;
    private Array $auditions;
    private Genre $genre;

/* Lister le casting d'un film (dans le film Star Wars Episode IV, Han Solo a été incarné par
Harrison Ford, Luke Skywalker a été incarné par Mark Hamill, ...)  */


public function __construct( string $titre, string $dateDeSortieFrance, int $dure , Genre $genre ,Realisateur $realisateur ,string  $synopsis="") {
    $this->titre = $titre;
    $this->dateDeSortieFrance = new DateTime($dateDeSortieFrance);
    $this->dure = $dure;
    $this->synopsis = $synopsis;
    $this->genre =$genre;
    $this->realisateur = $realisateur;
    $this->auditions = [];
    $this->realisateur->addFilm($this);
    $this->genre->addFilm($this);
  
}



//------------------------------------------------------------------getter setter

    

    /**
     * Get the value of genre
     */ 
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set the value of genre
     *
     * @return  self
     */ 
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }
    /**
     * Get the value of titre
     */ 
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @return  self
     */ 
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get the value of dateDeSortieFrance
     */ 
    public function getDateDeSortieFrance()
    {
        return $this->dateDeSortieFrance;
    }

    /**
     * Set the value of dateDeSortieFrance
     *
     * @return  self
     */ 
    public function setDateDeSortieFrance($dateDeSortieFrance)
    {
        $this->dateDeSortieFrance = $dateDeSortieFrance;

        return $this;
    }

    /**
     * Get the value of dure
     */ 
    public function getDure()
    {
        return $this->dure;
    }

    /**
     * Set the value of dure
     *
     * @return  self
     */ 
    public function setDure($dure)
    {
        $this->dure = $dure;

        return $this;
    }

    /**
     * Get the value of realisateur
     */ 
    public function getRealisateur()
    {
        return $this->realisateur;
    }

    /**
     * Set the value of realisateur
     *
     * @return  self
     */ 
    public function setRealisateur($realisateur)
    {
        $this->realisateur = $realisateur;

        return $this;
    }

    /**
     * Get the value of synopsis
     */ 
    public function getSynopsis()
    {
        return $this->synopsis;
    }

    /**
     * Set the value of synopsis
     *
     * @return  self
     */ 
    public function setSynopsis($synopsis)
    {
        $this->synopsis = $synopsis;

        return $this;
    }


    public function addAudition (Audition $audition)
{
    $this->auditions[]=$audition;
}




    


    public function __toString()
    {
        return $this->titre;
    }


public function distributionDufilm()
{
    $result ="<h2> $this->titre a la distribution suivante : </h2>";
    foreach ($this->auditions as $audition) 
    {
      $result.= $audition->getActeur()."<br>";
    }
return $result;

}


public function dureeHeure()
{
    $minutes=$this->dure;
    $hours  = floor($minutes/60); 
    $minutes = $minutes % 60;
    $result = $hours."h". $minutes."m <br>";
    return $result;
}

public function dateDesortieFR()
{
     return $this->dateDeSortieFrance->format('d-m-Y')."<br>";
}


}