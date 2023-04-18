<?php
class Film 
{

    private string $titre;
    private Datetime $dateDeSortieFrance;
    private int $dure;
    private Realisateur $realisateur;
    private string  $synopsis;

/* Lister le casting d'un film (dans le film Star Wars Episode IV, Han Solo a été incarné par
Harrison Ford, Luke Skywalker a été incarné par Mark Hamill, ...)  */


public function __construct( $titre,$dateDeSortieFrance,$dure, $synopsis="") {
    $this->titre = $titre;
    $this->dateDeSortieFrance = new DateTime($dateDeSortieFrance);
    $this->dure = $dure;
    $this->synopsis = $synopsis;
    // $this->realisateur = $realisateur;


}



//------------------------------------------------------------------getter setter
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
}