<?php

interface Animal{
    function makeSound();
    function eat();
}

interface AnotherInterface{
    function anotherFunc();
}

class Dog implements Animal, AnotherInterface{
    function makeSound()
    {
        
    }

    function eat()
    {
        
    }

    function anotherFunc()
    {
        
    }
}