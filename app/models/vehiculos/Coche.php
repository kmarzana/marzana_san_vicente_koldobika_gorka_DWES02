<?php
declare(strict_types= 1);

class Coche extends Vehiculo
{
    // Atributos
    private int $puertas;

    // Constructor
    public function __construct(int $id, string $marca, string $modelo, int $anio, string $tipo, int $puertas)
    {
        parent::__construct($id, $marca, $modelo, $anio, $tipo);
        $this->puertas = $puertas;
    }

    //Getters
    public function getPuertas(): int
    {
        return $this->puertas;
    }

    /**
     * Devuelve una representación del objeto Coche como un array asociativo.
     * 
     * @return array{id: int, marca: string, modelo: string, anio: int, tipo: string, puertas: int}
     */
    public function toArray(): array
    {
        $data = parent::toArray();
        $data["puertas"] = $this->puertas;

        return $data;
    }
}