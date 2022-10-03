<?php

class Car 
{
    private int $nbWheels = 4;

    private int $currentSpeed = 0;

    private string $color;

    private int $nbSeats = 5;

    private string $energy = 'gasoline';

    private int $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function start(): string 
    {
        $sentence = '';

        while ($this->currentSpeed < 50) {
            $this->currentSpeed++;
            $sentence .= "Faster !";
        }

        $sentence .= 'I have enough speed';
        return $sentence;
    }

    public function forward(): string 
    {
        $this->currentSpeed = 50;

        return 'It\'s ok !';
    }

    public function brake(): string 
    {
        $sentence = '';

        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= 'Brake !!!';
        }

        $sentence .= 'I\'m stopped';
        return $sentence;
    }

    public function getNbWheels(): int 
    {
        return $this->nbWheels;
    }

    public function getCurrentSpeed(): int 
    {
        return $this->currentSpeed;
    }

    public function getColor(): string 
    {
        return $this->color;
    }

    public function getNbSeats(): int 
    {
        return $this->nbSeats;
    }

    public function getEnergy(): string 
    {
        return $this->energy;
    }

    public function getEnergyLevel(): int 
    {
        return $this->energyLevel;
    }
}