## Factory

Digamos que factory es como una fabrica donde se crean diferentes productos(objetos)
en este caso alguien (clase) quiere comprar el producto entonces el suplier o proveedor vendria a ser
el factory ya que tiene el stock pero no es directamente el creador de esos productos solo los
provee el creador son las clases en si mismas.

```php

class MySQLConn {

        public function __construct() {
                echo "MySQL Database Connection" . PHP_EOL;
        }

        public function select() {
                echo "Your mysql select query execute here" . PHP_EOL;
        }

}

class OracleConn {

        public function __construct() {
                echo "Oracle Database Connection" . PHP_EOL;
        }

        public function select() {
                echo "Your oracle select query execute here" . PHP_EOL;
        }

}

```
Your Factory class would take care of the creation of object for database connection.


```php
class DBFactory {

        public static function getConn($dbtype) {

                switch($dbtype) {
                        case "MySQL":
                                $dbobj = new MySQLConn();
                                break;
                        case "Oracle":
                                $dbobj = new OracleConn();
                                break;
                        default:
                                $dbobj = new MySQLConn();
                                break;
                }

                return $dbobj;
        }

}
```
User just need to pass the name of the database type

```php
$dbconn1 = DBFactory::getConn("MySQL");
$dbconn1->select();
```

```
MySQL Database Connection
Your mysql select query execute here
```

In future you may have different database then you don't need to change the entire code only need to pass the new database type and other code will run without making any changes.

```
$dbconn2 = DBFactory::getConn("Oracle");
$dbconn2->select();
```
