<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="radius" placeholder="Radius"><br>
        <input type="submit" name="submit" value="submit">    
    </form>
</body>
</html>
<?php 
    include("Circle.php");
    $cirle= new Circle();
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_POST["submit"])){
            $cirle->set_radius($_POST["radius"]);
        }
    }
    echo "radius: ".$cirle->get_radius();
    echo "<br>";
    echo "area: ".$cirle->area();
    echo "<br>";
    echo "parameter: ".$cirle->parameter();
?>  