<?php

// Интерфейс - "точка взаимодействия", своего рода вид разъёма, куда мы можем подключить что угодно (вилка от розетки, USB разъём и т.д.)
interface EngineInterface
{
    public function start();

    public function stop();
}

class Car
{
    private $color;
    private $year;
    private $manufacturer;
    private $engine;

    function __construct($color, $year, $izgotovitel, Engine $newEngine)  // Способ строгой типизации мотора (может использоваться лишь значение из класса Engine, если будет другое значение - скрипт остановится)
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

// Необходимо реализовать все методы, указанные в интерфейсе, иначе не будет работать
class Engine implements EngineInterface
{
    public function start()
    {

    }

    public function stop()
    {

    }
}

class anotherEngine implements EngineInterface
{
    public function start()
    {

    }

    public function stop()
    {

    }
}

$engine = new Engine;

$myCar = new Car("gold", 2004, "Mazda", $engine); // Если мы хотим задать значение  мотора, по это надо делать в экземпляре класса Engine
