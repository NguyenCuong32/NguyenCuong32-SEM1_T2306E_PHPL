<?php
class Person {
  private $name;
  private $age;

  public function __construct($name, $age) {
    $this->name = $name;
    $this->age = $age;
  }

  public function getName() {
    return $this->name;
  }

  public function getAge() {
    return $this->age;
  }
}

class Employee extends Person {
  private $salary;
  private $position;

  public function __construct($name, $age, $salary, $position) {
    parent::__construct($name, $age);
    $this->salary = $salary;
    $this->position = $position;
  }

  public function getSalary() {
    return $this->salary;
  }

  public function getPosition() {
    return $this->position;
  }

  public function displayDetails() {
    echo "Name: " . $this->getName() . "<br>";
    echo "Age: " . $this->getAge() . "<br>";
    echo "Salary: $" . $this->getSalary() . "<br>";
    echo "Position: " . $this->getPosition() . "<br>";
  }
}

// Sử dụng
$employee = new Employee("Dũng", 37, 1200, "Manager");
$employee->displayDetails();
?>