
<?php
/*
1.Необходимо создать класс
1.1 с 2 свойствами public и 2 свойствами private, осуществить вызовы публичных при создании объекта
1.2 создать геттеры и сеттеры для приватных
1.3 создать конструктор класса, где будут назначаться все свойства
1.4 протестировать весь созданный функционал на объектах

2. К существующему классу создать дочерний
2.1 Создать дополнительные свойства, расширить конструктор для заполнения этих свойств
2.2 Добавить методы, которые путём арифметики будут получать значение из двух свойств - значение для третьего - метод приватный, должен вызываться в другом методе или в конструкторе

3. Создать ещё 1 класс, наследуемый от предыдущего, который будет наследовать конструктор от самого старшего класса - найти ошибки в структуре - устранить

*/

// 1. Создадим класс Car
class Car {

    // 1.1 Объявим 2 публичных объекта и 2 внутренних
    public $handling;
    public $transmission;
    private $fuelSupply = "28";
    private $airSupply = "100";

    // 1.2 Геттер - функция вывода закрытого (внутреннего) свойства
    public function getFuelSupply()
    {
        return $this->fuelSupply;
    }

    // 1.2 Сеттер - Функция задания закрытого свойства
    public function setFuelSupply($fuelSupply)
    {
        $this->fuelSupply = $fuelSupply;
    }

    public function getAirSupply()
    {
        return $this->airSupply;
    }

    public function setAirSupply($airSupply)
    {
        $this->airSupply = $airSupply;
    }

    // 1.3 Конструктор - способ задания публичных свойств, путём занесения их в аргументы функции
    public function __construct($handling, $transmission)
    {
        $this->handling = $handling;
        $this->transmission = $transmission;
    }
}

// 1.4 Создадим экземпляр класса, чтобы проверить работу первых трёх пунктов
$audi = new Car("normal", "CVT");

print_r($audi->getAirSupply());

$audi->setAirSupply("400");
$audi->setFuelSupply("34");

print_r($audi);

$audi->handling="sharp";
$audi->transmission="CVT";

print_r($audi);

$renault = new Car('normal', "mechanical");

print_r($renault);

// 2. Создадим дочерний класс Bus
class Bus extends Car
{
    // 2.1 Создадим дополнительные свойства и конструктор для их назначения
    public $persons;
    public $baggage;
    function __construct($handling, $transmission, $persons, $baggage)
    {
        parent::__construct($handling, $transmission);
        $this->persons = $persons;
        $this->baggage = $baggage;
    }

    // 2.2 Добавим приватный метод, который будет вычислять сумму двух свойств
    private function sum($persons, $baggage)
    {
        return $persons + $baggage;
    }

    // 2.2 Метод для вызова суммы
    public function catchSum($persons, $baggage)
    {
        return $this->sum($persons, $baggage);
    }
}

$ikarus = new Bus("horror", "mechanical", "26", "10");
$ikarus->catchSum("16", "25");

print_r($ikarus->catchSum("16", "25"));

print_r($ikarus);

// 3. Создать ещё 1 класс, наследуемый от предыдущего, который будет наследовать конструктор от самого старшего класса - найти ошибки в структуре - устранить
class IntercityBus extends Bus
{
  public function __construct($handling, $transmission)
  {
    Car::__construct($handling, $transmission);
  }
}

$newline = new IntercityBus("good", "automatic");

print_r($newline);
