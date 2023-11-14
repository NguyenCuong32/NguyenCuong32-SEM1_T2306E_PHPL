<?php 
    include("Shape.php");
    include("Rectangle.php");
    include("Triangle.php");

    $rectangle= new Rectangle(3,5);
    $triagle = new Triangle(3,5);

    echo  "area rectangle: ".$rectangle->CalculateArea();
    echo "<br>";
    echo "are triagle: ".$triagle->CalculateArea();
?>