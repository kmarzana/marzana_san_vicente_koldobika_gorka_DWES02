<?php
declare(strict_types=1);

require_once __DIR__ . "/../../app/controllers/vehiculos/VehiculoController.php";

require_once __DIR__ . "/../../app/models/vehiculos/Vehiculo.php";
require_once __DIR__ . "/../../app/models/vehiculos/Moto.php";
require_once __DIR__ . "/../../app/models/vehiculos/Coche.php";

$controller = new VehiculoController();

$parque = $controller->getVehiculos();
echo "--> Vehiculos en el parque: " . count($parque) . "\n\n";

$json = '{ "id":11, "tipo": "coche", "marca": "Renault", "modelo": "Clio","anio": 2020, "puertas": 5 }';
$nuevoVehiculo = $controller->store($json);

echo "--> Nuevo vehiculo: " . "\n";
var_dump($nuevoVehiculo);
echo "\n";

$parque = $controller->getVehiculos(); //! Actualizar el parque tras realizar un store()
echo "--> Vehiculos en el parque tras realizar un store(): " . count($parque) . "\n\n";

/*

--> Vehiculos en el parque: 10

--> Nuevo vehiculo: 
object(Coche)#12 (6) {
    ["id":protected]=>
    int(11)
    ["marca":protected]=>
    string(7) "Renault"
    ["modelo":protected]=>
    string(4) "Clio"
    ["anio":protected]=>
    int(2020)
    ["tipo":protected]=>
    string(5) "coche"
    ["puertas":"Coche":private]=>
    int(5)
}

--> Vehiculos en el parque tras realizar un store(): 11

*/

