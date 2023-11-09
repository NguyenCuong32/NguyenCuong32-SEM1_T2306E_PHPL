<?php
abstract class Animal {
  abstract public function eat();
  abstract public function makeSound();
}

class Dog extends Animal {
  public function eat() {
    echo "Chó đang ăn..." . "<br>";
  }

  public function makeSound() {
    echo "Gâu gâu!" . "<br>";
  }
}

class Cat extends Animal {
  public function eat() {
    echo "Mèo đang ăn..." . "<br>";
  }

  public function makeSound() {
    echo "Meo meo!" . "<br>";
  }
}

class Bird extends Animal {
  public function eat() {
    echo "Chim đang ăn..." . "<br>";
  }

  public function makeSound() {
    echo "Chíp chíp!" . "<br>";
  }
}

// Sử dụng
$dog = new Dog();
$dog->eat(); // Output: Chó đang ăn...
$dog->makeSound(); // Output: Gâu gâu!

$cat = new Cat();
$cat->eat(); // Output: Mèo đang ăn...
$cat->makeSound(); // Output: Meo meo!

$bird = new Bird();
$bird->eat(); // Output: Chim đang ăn...
$bird->makeSound(); // Output: Chíp chíp!
?>