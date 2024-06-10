<?php

interface Animal{
    function makeSound();
    function eat() ;
}
Class Dog implements Animal {
    function makeSound()
    {
        return "Woof!";
    }
    function eat()
    {
        return "The dog is eating.";
    }
}

$dog = new Dog();

echo $dog->makeSound();
echo "\n";
echo $dog->eat();
?>