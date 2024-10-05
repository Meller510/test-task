<?php
//Также можно использовать интерфейсы для достижения полиморфизма
// Интерфейс AnimalInterface

interface AnimalInterface {
    public function speak();
}

// Класс Dog, реализующий интерфейс
class Dog implements AnimalInterface {
    public function speak(): string
    {
        return "Woof! Woof!";
    }
}

// Класс Cat, реализующий интерфейс
class Cat implements AnimalInterface {
    public function speak(): string
    {
        return "Meow!";
    }
}

// Функция, принимающая массив животных и вызывающая их метод speak
function makeAnimalsSpeak($animals): void
{
    foreach ($animals as $animal) {
        echo $animal->speak() . PHP_EOL;
    }
}

// Создаем экземпляры классов Dog и Cat
$dog = new Dog();
$cat = new Cat();

// Создаем массив животных
$animals = [$dog, $cat];

// Вызываем функцию, которая демонстрирует полиморфизм
makeAnimalsSpeak($animals);  //Woof! Woof!
                            //Meow!
