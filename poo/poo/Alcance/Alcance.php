<?php

class User{

  // public->cualquiera puede acceder
  // protected->solo los que heredan pueden acceder
  // private->nadie solo en la clase

  public const PAGINATE = 25;

  public $username;
 // protected $username
 // private $username

 public function getUsername()
 {
    //...
 }
}