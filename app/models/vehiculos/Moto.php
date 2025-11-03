<?php
declare(strict_types= 1);

class Moto extends Vehiculo
{
    // Atributos
    private bool $sidecar;

    // Constructor
    public function __construct(int $id, string $marca, string $modelo, int $anio, string $tipo, bool $sidecar)
    {
        parent::__construct($id, $marca, $modelo, $anio, $tipo);
        $this->sidecar = $sidecar;
    }

    // Getters
    public function getSidecar(): bool
    {
        return $this->sidecar;
    }

    /**
     * Devuelve una representación del objeto Moto como un array asociativo.
     * 
     * @return array{id: int, marca: string, modelo: string, anio: int, tipo: string, sidecar: bool}
     */
    public function toArray(): array
    {
        $data = parent::toArray();
        $data["sidecar"] = $this->sidecar;

        return $data;
    }
}