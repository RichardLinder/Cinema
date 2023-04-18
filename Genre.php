<?php

class Genre 
{
    private  array $films;
    private string $noms;


//---------------------------------------------------------------------------------------------getter setter
    /**
     * Get the value of noms
     */ 
    public function getNoms()
    {
        return $this->noms;
    }

    /**
     * Set the value of noms
     *
     * @return  self
     */ 
    public function setNoms($noms)
    {
        $this->noms = $noms;

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
}