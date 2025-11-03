<?php
declare(strict_types=1);

require_once __DIR__ . "/../../app/controllers/vehiculos/VehiculoController.php";

require_once __DIR__ . "/../../app/models/vehiculos/Vehiculo.php";
require_once __DIR__ . "/../../app/models/vehiculos/Moto.php";
require_once __DIR__ . "/../../app/models/vehiculos/Coche.php";

$controller = new VehiculoController();
var_dump($controller->getVehiculos());

/*

array(10) {
  [0]=>
  object(Coche)#2 (6) {
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
    int(5)
  }
  [1]=>
  object(Coche)#3 (6) {
    ["id":protected]=>
    int(2)
    ["marca":protected]=>
    string(4) "SEAT"
    ["modelo":protected]=>
    string(5) "Ibiza"
    ["anio":protected]=>
    int(2018)
    ["tipo":protected]=>
    string(5) "coche"
    ["puertas":"Coche":private]=>
    int(3)
  }
  [2]=>
  object(Coche)#4 (6) {
    ["id":protected]=>
    int(3)
    ["marca":protected]=>
    string(6) "Toyota"
    ["modelo":protected]=>
    string(7) "Corolla"
    ["anio":protected]=>
    int(2022)
    ["tipo":protected]=>
    string(5) "coche"
    ["puertas":"Coche":private]=>
    int(4)
  }
  [3]=>
  object(Coche)#5 (6) {
    ["id":protected]=>
    int(4)
    ["marca":protected]=>
    string(10) "Volkswagen"
    ["modelo":protected]=>
    string(4) "Golf"
    ["anio":protected]=>
    int(2019)
    ["tipo":protected]=>
    string(5) "coche"
    ["puertas":"Coche":private]=>
    int(5)
  }
  [4]=>
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
  [5]=>
  object(Moto)#7 (6) {
    ["id":protected]=>
    int(6)
    ["marca":protected]=>
    string(6) "Yamaha"
    ["modelo":protected]=>
    string(5) "MT-07"
    ["anio":protected]=>
    int(2021)
    ["tipo":protected]=>
    string(4) "moto"
    ["sidecar":"Moto":private]=>
    bool(false)
  }
  [6]=>
  object(Moto)#8 (6) {
    ["id":protected]=>
    int(7)
    ["marca":protected]=>
    string(5) "Honda"
    ["modelo":protected]=>
    string(7) "PCX 125"
    ["anio":protected]=>
    int(2023)
    ["tipo":protected]=>
    string(4) "moto"
    ["sidecar":"Moto":private]=>
    bool(false)
  }
  [7]=>
  object(Moto)#9 (6) {
    ["id":protected]=>
    int(8)
    ["marca":protected]=>
    string(8) "Kawasaki"
    ["modelo":protected]=>
    string(4) "Z900"
    ["anio":protected]=>
    int(2020)
    ["tipo":protected]=>
    string(4) "moto"
    ["sidecar":"Moto":private]=>
    bool(false)
  }
  [8]=>
  object(Moto)#10 (6) {
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
  [9]=>
  object(Moto)#11 (6) {
    ["id":protected]=>
    int(10)
    ["marca":protected]=>
    string(15) "Harley-Davidson"
    ["modelo":protected]=>
    string(9) "Sportster"
    ["anio":protected]=>
    int(2019)
    ["tipo":protected]=>
    string(4) "moto"
    ["sidecar":"Moto":private]=>
    bool(true)
  }
}

*/