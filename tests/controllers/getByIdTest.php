<?php
declare(strict_types=1);

require_once __DIR__ . "/../../app/controllers/vehiculos/VehiculoController.php";

require_once __DIR__ . "/../../app/models/vehiculos/Vehiculo.php";
require_once __DIR__ . "/../../app/models/vehiculos/Moto.php";
require_once __DIR__ . "/../../app/models/vehiculos/Coche.php";

$controller = new VehiculoController();
$vehiculo = $controller->getById(5);
var_dump($vehiculo);

/*

object(Coche)#6 (6) {
    ["id":protected]=>
    int(5)
    ["marca":protected]=>
    string(7) "Peugeot"
    ["modelo":protected]=>
    string(3) "208"
    ["anio":protected]=>
    int(2021)
    ["tipo":protected]=>
    string(5) "coche"
    ["puertas":"Coche":private]=>
    int(5)
}

*/

$vehiculo = $controller->getById(26);
var_dump($vehiculo);

/*

NULL

*/