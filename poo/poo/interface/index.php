<?php

interface Search
{
  public function all();/* aqui declaramos */
}
/* preparamos todo el codigo necesario entonce trabajamos sobre interfaces */
class User implements Search
{
  public function all(){
    /* aqui desarrollamos */
    return "Obteniendo a los Users, XML";
  }
}

class Post implements Search
{
  public function all(){
    /* aqui desarrollamos */
    return "Obteniendo a los Posts, JSON";
  }
}

$user = new User();
echo $user->all();

$post = new Post();
echo $post->all();