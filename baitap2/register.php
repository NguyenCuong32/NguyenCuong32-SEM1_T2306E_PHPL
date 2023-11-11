<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<?php 
    // validate
    $username=$password=$email=$fullname="";
    $usernameErr=$passwordErr=$emailErr=$fullnameErr="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty($_POST["username"])){
            $usernameErr= "<span style='color: red;'>* Username us required</span>";
        }else{ 
            if(!preg_match("/^[a-zA-Z0-9]*$/",$_POST["username"])){
                $usernameErr="<span style='color: red;'>* Invalid Username</span>";
        }}
    if(!empty($_POST["password"])){
        $passwordErr= "<span style='color: red;'>* Password us required</span>";
        }else{ 
            if(preg_match("/^(?=.*(\W)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{6,32})$/",$_POST["password"])){
            $passwordErr= "<span style='color: red;'>* Password is too weak</span>";
        }}
    if(empty($_POST["email"])){
            $emailErr= "<span style='color: red;'>* Email us required</span>";
        }else{ 
            if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
            $emailErr= "<span style='color: red;'>* Email is too weak</span>";
            }}
    if(empty($_POST["fullname"])){
                $fullnameErr= "<span style='color: red;'>* Fullname us required</span>";
            }
}?>

    <form action="register.php" method="post">
        <label>Username</label><br>
        <input type="text" name="username"><?php echo $usernameErr; ?> <br>
        <label>Fullname</label><br>
        <input type="text" name="fullname"> <?php echo $fullnameErr; ?><br>
        <label>Email</label><br>
        <input type="text" name="email"><?php echo $emailErr; ?> <br>
        <label>Password</label><br>
        <input type="text" name="password"><?php echo $passwordErr; ?> <br>
        <input type="submit" name="register" value="register">
        <button><a href="login.php">login</a></button>
    </form>
</body>
</html>

<?php 
    include("connect.php");
    $username=$_POST["username"];
    $password=$_POST["password"];
    $email=$_POST["email"];
    $fullname=$_POST["fullname"];
    if(empty($username)||empty($password)){
        echo"required pleass";
    }else{
    $sql=" INSERT INTO User (Username,Fullname,Email,Password)
    VALUE ('$username','$fullname','$email','$password') ;
    ";
        if(mysqli_query($conn,$sql)){
            echo "registering successfully";
        }else{
            echo "registration failes";
        }
    }
?>