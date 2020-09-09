<?php

/*
1. Сделайте класс Worker, в котором будут следующие public поля - name (имя), age (возраст), salary (зарплата).

Создайте объект этого класса, затем установите поля в следующие значения (не в __construct, а для созданного объекта) - имя 'Иван', возраст 25, зарплата 1000. Создайте второй объект этого класса, установите поля в следующие значения - имя 'Вася', возраст 26, зарплата 2000.

Выведите на экран сумму зарплат Ивана и Васи. Выведите на экран сумму возрастов Ивана и Васи.
*/

class Worker
{
    public $name;
    public $age;
    public $salary;
}

$worker1 = new Worker;
$worker1->name = "Иван";
$worker1->age = "25";
$worker1->salary = "1000";

$worker2 = new Worker;
$worker2->name = "Вася";
$worker2->age = "26";
$worker2->salary = "2000";

print_r($worker2->salary + $worker1->salary);
print_r("\n");
print_r($worker1->age + $worker2->age);

/*
2. Сделайте класс Worker, в котором будут следующие private поля - name (имя), age (возраст), salary (зарплата) и следующие public методы setName, getName, setAge, getAge, setSalary, getSalary.

Создайте 2 объекта этого класса: 'Иван', возраст 25, зарплата 1000 и 'Вася', возраст 26, зарплата 2000.

Выведите на экран сумму зарплат Ивана и Васи. Выведите на экран сумму возрастов Ивана и Васи.
*/

class Worker
{
    private $name;
    private $age;
    private $salary;

    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }
    public function getAge()
    {
        return $this->age;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
    public function getSalary()
    {
        return $this->salary;
    }
}

$worker1 = new Worker;
$worker1->setName("Иван");
$worker1->setAge("25");
$worker1->setSalary("1000");

$worker2 = new Worker;
$worker2->setName("Вася");
$worker2->setAge("26");
$worker2->setSalary("2000");

print_r($worker2->getSalary() + $worker1->getSalary());
print_r("\n");
print_r($worker1->getAge() + $worker2->getAge());

/*
Дополните класс Worker из предыдущей задачи private методом checkAge, который будет проверять возраст на корректность (от 1 до 100 лет). Этот метод должен использовать метод setAge перед установкой нового возраста (если возраст не корректный - он не должен меняться).
*/

class Worker
{
    private $name;
    private $age;
    private $salary;

    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }

    private function checkAge($age)
    {
        if($age >= 1 && $age <= 100)
        {
            return true;
        } else {
            return false;
        }
    }
    public function setAge($age)
    {
        if($this->checkAge($age)){
            $this->age = $age;
        }
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
    public function getSalary()
    {
        return $this->salary;
    }
}

$worker1 = new Worker;
$worker1->setName("Иван");
$worker1->setAge(25);
$worker1->setSalary(1000);

$worker2 = new Worker;
$worker2->setName("Вася");
$worker2->setAge(26);
$worker2->setSalary(2000);

$worker2->setAge(88);  // 88
print_r($worker2->getAge());
print_r("\n");
$worker2->setAge(110);
print_r($worker2->getAge()); // 88

/*
4. Сделайте класс Worker, в котором будут следующие private поля - name (имя), salary (зарплата). Сделайте так, чтобы эти свойства заполнялись в методе __construct при создании объекта (вот так: new Worker(имя, возраст) ). Сделайте также public методы getName, getSalary.

Создайте объект этого класса 'Дима', возраст 25, зарплата 1000. Выведите на экран произведение его возраста и зарплаты.
*/

class Worker
{
    private $name;
    private $salary;
    private $age;

    public function getName()
    {
        return $this->name;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function getSalary()
    {
        return $this->salary;
    }

    public function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }
}

$worker1 = new Worker("Дима", 25, 1000);
print_r($worker1->getAge() * $worker1->getSalary());

/*
5. Сделайте класс User, в котором будут следующие public поля - name (имя), age (возраст), public методы setName, getName, setAge, getAge.

Сделайте класс Worker, который наследует от класса User и вносит дополнительное private поле salary (зарплата), а также методы public getSalary и setSalary.

Создайте объект этого класса 'Иван', возраст 25, зарплата 1000. Создайте второй объект этого класса 'Вася', возраст 26, зарплата 2000. Найдите сумму зарплата Ивана и Васи.

Сделайте класс Student, который наследует от класса User и вносит дополнительные private поля стипендия, курс, а также геттеры и сеттеры для них.
*/

class User
{
    protected $name;
    protected $age;

    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }
    public function getAge()
    {
        return $this->age;
    }
}

class Worker extends User
{
    private $salary;

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
    public function getSalary()
    {
        return $this->salary;
    }
}

$worker1 = new Worker;
$worker1->setName("Иван");
$worker1->setAge(25);
$worker1->setSalary(1000);

$worker2 = new Worker;
$worker2->setName("Вася");
$worker2->setAge(26);
$worker2->setSalary(2000);

print_r($worker1->getSalary() + $worker2->getSalary());

class Student extends User
{
    private $grants;
    private $year;

    public function setGrants($grants)
    {
        $this->grants = $grants;
    }
    public function getGrants()
    {
        return $this->grants;
    }

    public function setYear($year)
    {
        $this->year = $year;
    }
    public function getYear()
    {
        return $this->year;
    }
}

/*
6. Создайте класс Form - оболочку для создания форм. Он должен иметь методы input, submit, password, textarea, open, close. Каждый метод принимает массив атрибутов.
Для решения задачи сделайте private метод, который параметром будет принимать массив, например, ['type'=>'text', 'value'=>'!!!'] и делать из него строку с атрибутами, в нашем случае type="text" value="!!!".
*/

class Form
{
    private function createAttribute($attribute)
    {
        $attr = "";
        foreach($attributes as $key=>$value)
        {
            $attr = $attr . $key . ' =" ' . $value . ' " ';
        }
        return $attr;
    }

    public function input($attribute)
    {
        $attribute = $this->createAttribute($attributes);
        return '<imput type = "password" ' . $attribute . '>';
    }

    public function textarea($attribute)
    {
        $attribute = $this->createAttribute($attributes);
        return '<textarea ' . $attributes . '>';
    }

    public function submit($attribute)
    {
        $attribute = $this->createAttribute($attribute);
        return '<input type = "submit" ' . $attribute . '>';
    }

    public function open($attribute)
    {
        $attribute = $this->createAttribute($attribute);
        return '<form ' . $attribute . '>';
    }

    public function close($attribute)
    {
        return '</form>';
    }
}
