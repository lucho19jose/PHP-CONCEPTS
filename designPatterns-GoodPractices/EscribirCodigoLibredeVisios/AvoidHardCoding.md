## Evitar el hardcoding

El hardcoding es la práctica de escribir valores literales en lugar de identificadores. No debe de usarse, ya que si el día de mañana debemos cambiar los valores eso significa que debemos cambiar el código en los lugares que esté ese valor estático por completo y luego mandar a producción, cuándo podríamos hacer el cambio más orgánico en una variable que afecte a todos los lugares que es llamada.

````php

<?php

$configs = require_once __DIR__.'/config.inc.php';
$precioInicial = $argv[1];
$precioConIVA = $precioInicial * ( 1 + $configs['valor_iva'] / 100 );

echo "Valor del IVA: {$configs['valor_iva']}%".PHP_EOL;
echo "Sin IVA: \$$precioInicial, con IVA: \$$precioConIVA".PHP_EOL;


``