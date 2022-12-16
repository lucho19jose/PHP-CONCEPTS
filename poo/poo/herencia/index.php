<?php

class User
{
  public $name;

  public function __construct($name, $lastname=null)
  {
    $this->name = $name;
    $this->lastname = $lastname;
  }

  public function getName()
  {
    return $this->name;
  }

  final public function getlastname(){
    return $this->lastname;
  }
}

class Admin extends User {
  /*  */
  /* public function getlastname(){// to avoid it we put final
    return "overwrite";
  } */
}

$admin = new Admin('Jose');
echo $admin->getlastname();