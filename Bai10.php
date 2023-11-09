<?php
class Person {
  private $name;
  private $age;

  public function __construct($name, $age) {
    $this->name = $name;
    $this->age = $age;
  }

  public function __toString() {
    return "Name: " . $this->name . ", Age: " . $this->age;
  }
}

// Example usage:
$person = new Person("Đinh Nam", 27);
echo $person;
?>
