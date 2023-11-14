<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="lenght" placeholder="length"><br>
        <input type="text" name="width" placeholder="width"><br>
        <input type="submit" name="area" value="area">
        <input type="submit" name="perimeter" value="perimeter">
    </form>
</body>
</html> -->
<?php 
    include ("Rectangle.php");
    $rectangle1= new Rectangle();
    $rectangle1->set_lenght(10);
    $rectangle1->set_width(5);
    echo "chieu dai: ".$rectangle1->get_lenght()."<br>";
    echo "chieu rong: ".$rectangle1->get_width();
    echo "<br>";
    echo "area: ".$rectangle1->area();
    echo "<br>";
    echo "perimeter: ".$rectangle1->perimeter();
?>