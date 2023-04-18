<?php 
class role
{
    private string  $nom;
    private array $audition;


/*Lister la liste des acteurs ayant incarné un rôle précis (ex: les acteurs ayant joué le rôle de
Batman : Michael Keaton, Val Kilmer, George Clooney, ...) */

public function __construct(string $nom) 
{
    $this->nom = $nom;

    $this->audition=[];
}



    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }


//____________________________________________methode


public function addaddAudition (Audition $audition)
{
    $this->audition[]=$audition;
}
}

