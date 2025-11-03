<?php
declare(strict_types=1);

abstract class Vehiculo
{
    // Atributos
    protected int $id;
    protected string $marca;
    protected string $modelo;
    protected int $anio;
    protected string $tipo;

    // Constructor
    protected function __construct(int $id, string $marca, string $modelo, int $anio, string $tipo)
    {
        $this->id = $id;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->anio = $anio;
        $this->tipo = $tipo;
    }

    // Getters
    public function getId(): int
    {
        return $this->id;
    }

    public function getMarca(): string
    {
        return $this->marca;
    }

    public function getmodelo(): string
    {
        return $this->modelo;
    }

    public function getAnio(): int
    {
        return $this->anio;
    }

    public function getTipo(): string
    {
        return $this->tipo;
    }

    /**
     * Devuelve una representación del objeto Vehiculo como un array asociativo.
     * 
     * @return array{id: int, marca: string, modelo: string, anio: int, tipo: string}
     */
    public function toArray(): array
    {
        return [
            "id" => $this->id,
            "marca" => $this->marca,
            "modelo" => $this->modelo,
            "anio" => $this->anio,
            "tipo" => $this->tipo
        ];
    }
}