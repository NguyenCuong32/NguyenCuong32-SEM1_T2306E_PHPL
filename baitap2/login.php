<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="post">
        <label>Username</label><br>
        <input type="text" name="username"><br>
        <label>Password</label><br>
        <input type="text" name="password"><br>
        <input type="submit" name="login" value="login">
        <button><a href="register.php">Register</a></button>
    </form>
</body>
</html>

<?php 
    include("connect.php");
    session_start();
    if (isset($_SESSION["username"])) {
        header("location:index.php");
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
            $username = $_POST["username"];
            $password = $_POST["password"];
        if(isset($_POST["login"])){
            if(empty($_POST["password"]) || empty($_POST["username"])){
                echo "vui long nhap user passwor";
            }else{
                $sql= " SELECT * FROM User WHERE Username='$username' AND Password= '$password' ";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result)> 0){
                    $_SESSION["username"] = "$username";
                    header("location:index.php");
                }else{
                    echo "dang nhap that bai";
                }
            }
        }
    }
?>