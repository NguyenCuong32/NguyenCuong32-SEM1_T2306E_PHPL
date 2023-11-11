<?php
    include("connect.php");
    $this_id=$_GET['this_id'];

    $sql= "SELECT * FROM User WHERE id=". $this_id;
    $query = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($query);

    if(isset($_POST["edit"])){
        $username=$_POST["username"];
        $password=$_POST["password"];
        $email=$_POST["email"];
        $fullname=$_POST["fullname"];
        $sql="UPDATE User SET Username='$username',Password='$password',Fullname='$fullname',Email='$email' WHERE ID=". $this_id;
        mysqli_query($conn,$sql);
        header("location:product.php");
    }
?>
<h1>Edit : <?php echo $row['Fullname'] ?></h1>
<form method="post">
    Username: <br>
    <input type="text" name="username" value="<?php echo $row['Username']?>"><br>
    Fullname:<br>
    <input type="text" name="fullname" value="<?php echo $row['Fullname']?>"><br>
    Email:<br>
    <input type="text" name='email' value="<?php echo $row['Email']?>"><br>
    Password:<br>
    <input type="text" name="password" value="<?php echo $row['Password']?>"><br>
    <input type="submit" name="edit" value="edit">
</form>