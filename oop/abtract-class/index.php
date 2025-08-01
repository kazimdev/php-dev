<?php

abstract class Animal
{
    public $something;

    abstract function makeSound();

    public function eat()
    {
        echo "Eating Fishes..";
    }
}




class Dog extends Animal
{
    function makeSound()
    {
        echo "Dog saying -- Gheu Gheu <br/>";
    }
}

class Cat extends Animal
{
    function makeSound()
    {
        echo "Cat saying -- Mew Mew <br/>";
    }
}

class Cow extends Animal
{
    function makeSound()
    {
        echo "Cow saying -- Hamba Hamba <br/>";
    }

    function eat()
    {
        echo "Eating grasses";
    }
}

$dog = new Dog();
$cat = new Cat();
$cow = new Cow();

$animals = array($dog, $cat, $cow);

foreach ($animals as $animal) {
    $animal->makeSound();
}
