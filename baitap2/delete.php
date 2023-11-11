<?php 
    include("connect.php");
    $this_id = $_GET['this_id'];
    $sql= "DELETE FROM User WHERE ID ='$this_id' ";
    if(mysqli_query($conn,$sql)){
        header("location:product.php");
    }
?>