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
        require_once __DIR__ . "/../app/views/vehiculos/get.php";
    }

    if ($method === "POST") {
        $vehiculo = $controller->store($_POST["jsonPost"]);
        require_once __DIR__ . "/../app/views/vehiculos/post.php";
    }
}

request($controller);