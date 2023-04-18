<?php

class Audition
{
 private Film $film;
 private Role $role;
    






// -------------------------------------------getter setter


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

 /**
  * Get the value of role
  */ 
 public function getRole()
 {
  return $this->role;
 }

 /**
  * Set the value of role
  *
  * @return  self
  */ 
 public function setRole($role)
 {
  $this->role = $role;

  return $this;
 }
}
