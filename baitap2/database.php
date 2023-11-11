<?php
    include("connect.php");

    // tạo database
    $sql =" CREATE DATABASE IF NOT EXISTS Etech ";
    if(mysqli_query($conn, $sql)){
        echo "Successfully created database";
    }else{
        echo "created database false";
    }

    $sql=" CREATE TABLE IF NOT EXISTS User
    (
        ID INT AUTO_INCREMENT PRIMARY KEY ,
        Username char(40) NOT NULL UNIQUE,
        Password char(40) NOT NULL UNIQUE,
        Email char(150) UNIQUE NOT NULL,
        Fullname nvarchar(100) NOT NULL    
    )";
    if(mysqli_query($conn, $sql)){
        echo "Successfully created table";
    }else{
        echo "create table false";
    }

    $sql= " CREATE TABLE IF NOT EXISTS Product
    (
        ID CHAR(10) PRIMARY KEY ,
        nameproduct  Nvarchar(100) NOT NULL ,
        price decimal(10,4) NOT NULL,
        desscription nvarchar(750)
    )
    ";
        if(mysqli_query($conn, $sql)){
            echo "Successfully created table";
        }else{
            echo "create table false";
        }
?>