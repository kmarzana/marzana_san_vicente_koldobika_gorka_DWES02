<?php
declare(strict_types=1);

require __DIR__ . "/../app/controllers/vehiculos/VehiculoController.php";

require_once __DIR__ . "/../app/models/vehiculos/Vehiculo.php";
require_once __DIR__ . "/../app/models/vehiculos/Coche.php";
require_once __DIR__ . "/../app/models/vehiculos/Moto.php";

$controller = new VehiculoController();

function request(VehiculoController $controller): void
{
    $method = $_SERVER["REQUEST_METHOD"] ?? "GET";

    if ($method === "GET") {
        $vehiculo = $controller->getById((int) $_GET["id"]);
        // var_dump($vehiculo);
    }

    if ($method === "POST") {
        $vehiculo = $controller->store($_POST["jsonPost"]);
        // var_dump($vehiculo);
    }
}

request($controller);