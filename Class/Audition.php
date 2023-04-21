<?php

class Audition
{
 private Film  $film;
 private Role $role;
 private Acteur $acteur;



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
  return $this->film;
 }

 /**
  * Set the value of films
  *
  * @return  self
  */ 
 public function setFilms($films)
 {
  $this->film = $films;

  return $this;
 }

 /**
  * Get the value of roles
  */ 
 public function getRoles()
 {
  return $this->role;
 }

 /**
  * Set the value of roles
  *
  * @return  self
  */ 
 public function setRoles($roles)
 {
  $this->role = $roles;

  return $this;
 }

 /**
  * Get the value of acteurs
  */ 
 public function getActeurs()
 {
  return $this->acteur;
 }

 /**
  * Set the value of acteurs
  *
  * @return  self
  */ 
 public function setActeurs($acteurs)
 {
  $this->acteur = $acteurs;

  return $this;
 }
}
