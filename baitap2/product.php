<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        session_start();
        if (!isset($_SESSION["username"])){
            header("location:login.php");
        }
    ?>
    <a href="index.php">Home</a>
    <table>
        <thead>
            <th>ID</th>
            <th>UserName</th>
            <th>Fullname</th>
            <th>Email</th>
            <th>Password</th>
            <th>Edit</th>
        </thead>
        <tbody>
            <?php 
                include("connect.php");
                $sql = "SELECT * FROM User";
                $result = mysqli_query($conn,$sql);
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <br>
                    <tr>
                        <td><?php echo $row['ID']?></td>
                        <td><?php echo $row['Username']?></td>
                        <td><?php echo $row['Fullname']?></td>
                        <td><?php echo $row['Email']?></td>
                        <td><?php echo $row['Password']?></td>
                        <td>
                            <button><a href="edit.php?this_id=<?php echo $row['ID']?>">Edit</a></button>
                            <button><a href="delete.php?this_id=<?php echo $row['ID']?>">Delete</a></button>
                        </td>
                    </tr>
            <?php }?>
        </tbody>
    </table>
    <button><a href="register.php">ADD</a></button>
</body>
</html>