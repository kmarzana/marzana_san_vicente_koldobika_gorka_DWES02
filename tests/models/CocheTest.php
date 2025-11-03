<?php
declare(strict_types=1);

require_once __DIR__ . "/../../app/models/vehiculos/Vehiculo.php";
require_once __DIR__ . "/../../app/models/vehiculos/Coche.php";

$vehiculo = new Coche(
    1,
    "Renault",
    "Clio",
    2020,
    "coche",
    3
);

echo var_dump($vehiculo);
/*

object(Coche)#1 (6) {
    ["id":protected]=>
    int(1)
    ["marca":protected]=>
    string(7) "Renault"
    ["modelo":protected]=>
    string(4) "Clio"
    ["anio":protected]=>
    int(2020)
    ["tipo":protected]=>
    string(5) "coche"
    ["puertas":"Coche":private]=>
    int(3)
}

*/