<?php

class Audition
{
 private film  $films;
 private role $role;
 private acteur $acteur;



 public function __construct( Acteur $acteur, Role $role, Film $film ) {
    $this->film = $film;
    $this->role= $role;
    $this->acteur = $acteur;
    $this->acteur->addAudition($this);
    $this->role->addAudition($this);
    $this->film->addAudition($this);


 }
    
//____________________________methodes

public function filmographie()
{
    $result =$this->film->getTitre();
    return $result;
}

public function getActeur()
{
    $result =$this->acteur->getNom()." ".$this->acteur->getPrenom()."<br>";
    return $result;
}







// -------------------------------------------getter setter
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

 /**
  * Get the value of roles
  */ 
 public function getRoles()
 {
  return $this->roles;
 }

 /**
  * Set the value of roles
  *
  * @return  self
  */ 
 public function setRoles($roles)
 {
  $this->roles = $roles;

  return $this;
 }

 /**
  * Get the value of acteurs
  */ 
 public function getActeurs()
 {
  return $this->acteurs;
 }

 /**
  * Set the value of acteurs
  *
  * @return  self
  */ 
 public function setActeurs($acteurs)
 {
  $this->acteurs = $acteurs;

  return $this;
 }
}
