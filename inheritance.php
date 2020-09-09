<?php

// Запрет на создание элементов класса Animal. Абстрактный класс обязан иметь минимум один абстрактный метод, а дочерние классы обязаны его реализовать.
abstract class Animal
{
    protected $name;

    public abstract function makeSound();

    public function jump()
    {

    }
}

class Cat extends Animal
{
    public function makeSound()
    {
        echo 'meow';
    }
}

class Dog extends Animal
{
    public function makeSound()
    {
        echo 'gav gav';
    }
}

class OwnerOfAnimals
{
    public function animalMakeSound (Animal $animal)
    {
        return $animal->makeSound();
    }
}

$cat = new Cat;
$dog = new Dog;
$human = new OwnerOfAnimals;

// Полиморфизм (то, у чего много форм) - обращаемся к двум объектам одинаково, а вот отвечают они по-разному
$human->animalMakeSound($cat);
$human->animalMakeSound($dog);
