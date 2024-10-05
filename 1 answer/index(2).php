<?php
//Немного подумав, понял, что неверно было использовать язык, который не требуется по вакансии, пришлось немного вспомнить PHP.
//Для наглядности этот пример будет более полноценным и захватит почти все основы ООП.
// Родительский класс
//PHP 8.3
class Animal {
    protected string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function speak(): string {
        return "I am an animal.";
    }

    public function getName(): string {
        return $this->name;
    }
}

// Дочерний класс для переопределения метода
class Dog extends Animal {
    public function speak(): string {
        return "Woof! My name is " . $this->getName();
    }
}

// Дочерний класс для расширения функционала базового класса
class Duck extends Animal {
    public function speak(): string {
        return "Quacking! My name is " . $this->getName();
    }
    public function fly(): string
    {
        return "That's it, I'm flying south.";
    }
}

// Создаем экземпляр класса Dog
$dog = new Dog("Buddy");
$duck = new Duck("Donald");

// Вызываем методы
echo $dog->speak() . PHP_EOL; // Вывод: Woof! My name is Buddy
echo $duck->speak() .'. '. $duck->fly() ; // Вывод: Quacking! My name is Donald. That's it, I'm flying south.

//Инкапсуляция
//Свойство $name объявлено как protected, что позволяет дочерним классам доступ к нему, но защищает его от прямого доступа извне.

//Наследование
//Классы Dog и Duck наследуют от базового класса Animal. Это позволяет им использовать свойства и методы, определенные в Animal, без необходимости повторного кода.
//Оба дочерних класса (Dog и Duck) переопределяют метод speak(), чтобы предоставить специфичное для каждого животного поведение. Это демонстрирует полиморфизм, когда один и тот же метод ведет себя по-разному в зависимости от объекта.
//Класс Duck добавляет новый метод fly(), который не присутствует в родительском классе Animal. Это показывает, как дочерние классы могут расширять функционал базового класса.
