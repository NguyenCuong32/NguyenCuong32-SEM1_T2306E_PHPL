<?php
    $host= "localhost:3306";
    $username="root";
    $password= "";
    $dbname= "Etech";
    $conn=mysqli_connect($host,$username,$password, $dbname);
    if(!$conn){
        die("can not connect to database".mysqli_connect_error());
    }else{
        //echo"Connected successfully";
    };
?>