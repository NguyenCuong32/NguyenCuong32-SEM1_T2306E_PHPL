<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <ul>
        <li><a href="product.php">product</a></li>
        <li>
            <button>
            <a href="logout.php">logout</a>
            </button>
        </li>
    </ul>
</body>
</html>

<?php 
    session_start();
    if (empty($_SESSION["username"])){
        header("location:login.php");
    }
?>