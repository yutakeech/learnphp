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
        return $age >= 1 and $age <=100
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

// Принято, чтобы каждый класс лежал в собственном файле с названием, идентичным названию класса. Для подключения лучше использовать require_once 'имя_класса(он же имя файла).php'; после чего создавать экземпляр класса и работать с ним.

/*
Сделайте класс City (город), в котором будут следующие свойства: name (название города), population (количество населения). Создайте 5 объектов класса City, заполните их данными и запишите в массив. Переберите созданный вами массив с городами циклом и выведите города и их население на экран.
*/

class City
{
    public $name;
    public $population;

    public function __construct($name, $population)
    {
        $this->name = $name;
        $this->population = $population;
    }
}

$cities = [
  new City('Калининград', 500),
  new City('Новосиборск', 1500),
  new City('Питер', 8000),
  new City('Москва', 12000),
  new City('Пекин', 20000)
];

foreach($cities as $city)
{
  echo $city->name . ' ' . $city->population . "</br>";
}

/*
Пусть у нас есть класс Student с двумя свойствами - name и course (курс студента).
Сделаем так, чтобы имя студента приходило параметром при создании объекта, а курс автоматически принимал значение 1:
Новый курс не будет больше 5.
*/

class Student
{
    private $name;
    private $course;

    public function __construct($name)
    {
        $this->name = $name;
        $this->course = 1;
    }

    public function getName()
    {
        return $this->name;
    }
    public function getCourse()
    {
        return $this->course;
    }

    public function transferToNextCourse()
    {
      if ($this->course < 5)
        return $this->course++;
    }
}

/*
Ассоциативный массив.
Пусть массив $methods будет ассоциативным с ключами method1 и method2:
<?php
	$methods = ['method1' => 'getName', 'method2' => 'getAge'];
?>
Выведите имя и возраст пользователя с помощью этого массива.
*/

class User
{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName()
    {
        return $this->name;
    }
    public function getAge()
    {
        return $this->age;
    }
}

$user = new User('Ваня', 30);

$methods = ['method1' => 'getName', 'method2' => 'getAge'];
echo $user->{$methods['method1']}();
echo $user->{$methods['method2']}();

/*
Вызов массива сразу после его использования
*/

class Arr
{
    public $numbers = [];

    public function __construct($numbers)
    {
        $this->numbers = $numbers;
    }

    public function addNumber($number)
    {
        $this->numbers[] = $number;
    }

    public function getSum()
    {
        return array_sum($this->numbers);
    }
}

echo (new Arr([1, 2, 3]))->getSum() + (new Arr([4, 5, 6]))->getSum();

/*
Создайте класс Form - оболочку для создания форм. Он должен иметь методы input, submit, password, textarea, open, close. Каждый метод принимает массив атрибутов.
Для решения задачи сделайте private метод, который параметром будет принимать массив, например, ['type'=>'text', 'value'=>'!!!'] и делать из него строку с атрибутами, в нашем случае type="text" value="!!!".
*/

class Form
{
    // Создадим метод, который преобразует массив в строку
    private function createAttribute($attribute)
    {
        // Зададим пустую строку
        $attr = "";
        // Для каждого атрибута, представленного в виде ключ=>значение (массив)
        foreach($attribute as $key=>$value)
        {
            // Строка будет 'ключ = "значение"'
            $attr = $attr . $key . ' = "' . $value . '" ';
        }
        return $attr;
    }

    public function input($attribute)
    {
        $attribute = $this->createAttribute($attribute);
        return '<' . $attribute . '>';
    }

    public function submit($attribute)
    {
        $attribute = $this->createAttribute($attribute);
        return '<input type = "submit" ' . $attribute . '>';
    }

    public function password($attribute)
    {
        $attribute = $this->createAttribute($attribute);
        return '<input type="password" ' . $attribute . '>';
    }

    public function textarea($attribute)
    {
        $attribute = $this->createAttribute($attribute);
        return '<textarea ' . $attribute . '>';
    }

    public function open($attribute)
    {
        $attribute = $this->createAttribute($attribute);
        return '<form ' . $attribute . '>';
    }

    public function close()
    {
        return '</form>';
    }
}

$form = new Form;
echo $form->open(['action'=>'index.php', 'method'=>'POST']);
echo $form->input(['type'=>'text', 'placeholder'=>'Ваше имя', 'name'=>'name']);
echo $form->password(['placeholder'=>'Ваш пароль', 'name'=>'pass']);
echo $form->submit(['value'=>'Отправить']);
echo $form->close();

/*
8. Создайте класс SmartForm, который будет наследовать от Form из предыдущей задачи и сохранять значения инпутов и textarea после отправки.

То есть если мы сделали форму, нажали на кнопку отправки - то значения из инпутов не должны пропасть. Мало ли что-то пойдет не так, например, форма некорректно заполнена, а введенные данные из нее пропали и их следует вводить заново. Этого следует избегать.
*/

class SmartForm extends Form
{

}
