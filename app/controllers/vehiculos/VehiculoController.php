<?php
declare(strict_types=1);

require_once __DIR__ . "/../../data/vehiculos_bbdd.php";

require_once __DIR__ . "/../../models/vehiculos/Vehiculo.php";
require_once __DIR__ . "/../../models/vehiculos/Coche.php";
require_once __DIR__ . "/../../models/vehiculos/Moto.php";

class VehiculoController
{
    // Atributos
    private $vehiculos = [];

    /**
     * Contructor
     * 
     * Al iniciar el contructor se carga el atributo $vehiculos con el parque de vehiculos. 
     */
    public function __construct()
    {
        $this->vehiculos = $this->leerVehiculos();
    }

    /**
     * Crea y almacena un objeto Vehiculo a partir de una cadena JSON.
     * 
     * @param string $json
     * @return Coche|Moto|null Objeto Vehiculo o null si el tipo no es válido.
     */
    public function store(string $json): ?Vehiculo
    {
        $data = json_decode($json, true);

        $vehiculo = null;

        if ($data["tipo"] === "coche") {

            $vehiculo = new Coche(
                (int) $data["id"],
                (string) $data["marca"],
                (string) $data["modelo"],
                (int) $data["anio"],
                (string) $data["tipo"],
                (int) $data["puertas"]
            );

            $this->vehiculos[] = $vehiculo;

        } elseif ($data["tipo"] === "moto") {

            $vehiculo = new Moto(
                (int) $data["id"],
                (string) $data["marca"],
                (string) $data["modelo"],
                (int) $data["anio"],
                (string) $data["tipo"],
                (bool) $data["sidecar"]
            );

            $this->vehiculos[] = $vehiculo;

        } else {

            return null;
        }

        return $vehiculo;
    }

    /**
     * Busca y devuelve un objeto Vehiculo por su identificador único.
     * 
     * @param int $id Identificador único.
     * @return Coche|Moto|null Objeto Vehiculo si existe, null si no lo encuentra.
     */
    public function getById(int $id): ?Vehiculo
    {
        foreach ($this->vehiculos as $vehiculo) {
            if ($vehiculo->getId() === $id) {
                return $vehiculo;
            }
        }

        return null;
    }

    /**
     * Carga los datos de vehiculos desde una BBDD como objetos tipo Vehiculo.
     * 
     * @param array $data Array asociativo con la información de los vehiculos.
     * @return array Lista de objetos Vehiculo.
     */
    private function leerVehiculos(array $data = VEHICULOS): array
    {
        foreach ($data as $v) {

            if ($v["tipo"] === "coche") {

                $this->vehiculos[] = new Coche(
                    (int) $v["id"],
                    (string) $v["marca"],
                    (string) $v["modelo"],
                    (int) $v["anio"],
                    (string) $v["tipo"],
                    (int) $v["puertas"]
                );

            } elseif ($v["tipo"] === "moto") {

                $this->vehiculos[] = new Moto(
                    (int) $v["id"],
                    (string) $v["marca"],
                    (string) $v["modelo"],
                    (int) $v["anio"],
                    (string) $v["tipo"],
                    (bool) $v["sidecar"]
                );
            }
        }

        return $this->vehiculos;
    }

    // Getters
    public function getVehiculos(): array
    {
        return $this->vehiculos;
    }
}