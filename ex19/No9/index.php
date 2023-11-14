<?php 
    include("Animal.php");
    include("Dog.php");
    include("Cat.php");
    include("Bird.php");

    $dog= new Dog();
    $cat= new Cat();
    $bird= new Bird();
    $dog->eat();
    $cat->eat();
    $bird->makeSound();
?>