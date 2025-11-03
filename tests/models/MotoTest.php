<?php
declare(strict_types=1);

require_once __DIR__ . "/../../app/models/vehiculos/Vehiculo.php";
require_once __DIR__ . "/../../app/models/vehiculos/Moto.php";

$vehiculo = new Moto(
    9,
    "BMW",
    "R 1250 GS",
    2019,
    "moto",
    true
);

echo var_dump($vehiculo);

/*

object(Moto)#1 (6) {
    ["id":protected]=>
    int(9)
    ["marca":protected]=>
    string(3) "BMW"
    ["modelo":protected]=>
    string(9) "R 1250 GS"
    ["anio":protected]=>
    int(2019)
    ["tipo":protected]=>
    string(4) "moto"
    ["sidecar":"Moto":private]=>
    bool(true)
}

*/