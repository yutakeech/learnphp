<?php
/*
1.Необходимо создать класс
1.1 с 2 свойствами public и 2 свойствами private, осуществить вызовы публичных при создании объекта
1.2 создать геттеры и сеттеры для приватных
1.3 создать конструктор класса, где будут назначаться все свойства
1.4 протестировать весь созданный функционал на объектах

2. К существующему классу создать дочерний
2.1 Создать дополнительные свойства, расширить конструктор для заполнения этих свойств
2.2 Добавить методы, которые путём арифметики получать значение из двух свойств - значение для третьего - метод приватный, должен вызываться в другом методе или в конструкторе

3. Создать ещё 1 класс, наследуемый от предыдущего, который будет наследовать конструктор от самого старшего класса - найти ошибки в структуре - устранить

*/

class Car {
    public $handling;
    public $transmission;
    private $fuelSupply;
    private $airSupply;

    public function getFuelSupply()
    {
        return $this->fuelSupply;
    }

    public function setFuelSupply()
    {
        $this->fuelSupply = $fuelSupply;
    }

    public function getAirSupply()
    {
        return $this->airSupply;
    }

    public function setAirSupply()
    {
        $this->airSupply = $airSupply;
    }

    public function __construct($handling, $transmission)
    {
        $this->handling = $handling;
        $this->transmission = $transmission;
    }
}

$audi = new Car();

$audi->handling="sharp";
$audi->transmission="CVT";


print_r($audi);

$renault = new Car(normal, mechanical);
