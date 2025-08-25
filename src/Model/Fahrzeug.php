<?php

namespace App\Model;

class Fahrzeug
{
    public function __construct(
        private int $id,
        private string $Marke,
        private string $Modell,
        private int $baujahr,
        private string $Leistung,
        private string $Status,
    ) {
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getMarke(): string
    {
        return $this->Marke;
    }

    public function getModell(): string
    {
        return $this->Modell;
    }

    public function getBaujahr(): int
    {
        return $this->baujahr;
    }

    public function getLeistung(): string
    {
        return $this->Leistung;
    }

    public function getStatus(): string
    {
        return $this->Status;
    }
}
