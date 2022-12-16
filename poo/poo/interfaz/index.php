<?php
// es un contrato en laravel existe una carpeta contratos
// que debemos cumplir cuando implementamos en clases
interface Person
{
  public function getName();
}

class Admin implements Person
{
  public $name;

  public function __construct($name)
  {
    $this->name = $name;
  }

  public function getName(){
    return $this->name;
  }
}

$admin = new Admin('Lynda');
echo $admin->getName();