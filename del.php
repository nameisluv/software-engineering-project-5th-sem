<?php

include 'config.php';

session_start();

if(!isset($_SESSION['admin_id'])){
   header('location:index.php');
}

if (isset($_GET['id'])) {  
    $id = $_GET['id'];  
    $query = "DELETE FROM user_form WHERE id ='$id'";  
    $run = mysqli_query($conn,$query);
    if ($run) {  
         header('location:disp.php');  
    }else{  
         echo "Error: ".mysqli_error($conn);  
    }  
}  
?>