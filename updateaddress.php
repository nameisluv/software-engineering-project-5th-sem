<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_id'])){
   header('location:index.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_POST['submit'])) {
        $address = mysqli_real_escape_string($conn, $_POST['address']);

        $select = "UPDATE user_form SET address='$address' WHERE id='$id';";
    
        $result = mysqli_query($conn, $select);
        if ($result) {  
            header('location:disp.php');  
       }else{  
            echo "Error: ".mysqli_error($conn);  
       } 
    }
};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>


   <link rel="stylesheet" href="style1.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>Malaria relif</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="address" required placeholder="enter your address">
      <input type="submit" name="submit" value="change" class="form-btn">
   </form>

</div>
</body>
</html>