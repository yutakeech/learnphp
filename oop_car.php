<?php

class Car
{
    private $color;
    private $year;
    private $manufacturer;
    private $engine;

    function __construct($color, $year, $izgotovitel, $newEngine)
    {
        $this->color = $color;
        $this->year = $year;
        $this->manufacturer = $izgotovitel;

        $this->engine = $newEngine;
    }

    public function startEngine()
    {
        // Запуск двигателя из класса Engine
        $this->engine->start();
    }

    public function stopEngine()
    {
        // Остановка двигателя из класса Engine
        $this->engine->stop();
    }

}

class startEngine
{
    public function start()
    {

    }

    public function stop()
    {

    }
}

$engine = new Engine;

$myCar = new Car("gold", 2004, "Mazda", $engine);
