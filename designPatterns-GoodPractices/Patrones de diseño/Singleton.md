## Patrones de diseño

Los patrones de diseño son soluciones conceptuales que se pueden aplicar a la hora de diseñar tus clases

- creación 
- estructuracion
- comportamiento

>ayuda a pensar como estructurar tus clases

Singleton 

de creación y comportamiento 

```php

class Singleton {
  private static $theInstance = null;
  public static function getInstance() {
    if(self::$theInstance === null) {
      self::$theInstance = new self();
    }
    return self::$theInstance;
  }
  private function __contruct(){
    $this->property = 1;
  }
}

```