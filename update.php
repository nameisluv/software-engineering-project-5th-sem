<?php
include 'config.php';

session_start();

if(!isset($_SESSION['admin_id'])){
    header('location:index.php');
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <style type="text/css">
      /* body{
        background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
      } */
    .navbar{
        background: -webkit-linear-gradient(to right, #5bc0de, #fff);  
          background: linear-gradient(to right, #5bc0de, #fff);
    }
    .thead{
        background: -webkit-linear-gradient(to right, #5bc0de, #fff);  
          background: linear-gradient(to right, #5bc0de, #fff);
    }
    </style>
</head>
<body>
<div class="container-fluid">
       <div class="row justify-content-center my-5">
           <div class="col-10">
            <table class="table table-bordered">
              <thead class="thead">
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Mobile No</th>
                  <th scope="col">Phone No</th>
                  <th scope="col">Address</th>

                </tr>
              </thead>
        <tbody>      
	<?php


 require "config.php";
        $id = $_GET['id']; 
        $query = "SELECT * FROM user_form WHERE id='$id';";
        $result = mysqli_query($conn, $query);

            while ($Row = mysqli_fetch_assoc($result)) { ?>
           <tr>
              <td><?php echo $Row["id"]; ?></td>
              <td><?php echo $Row["name"]; ?></td>
              <td><?php echo $Row["email"]; ?></td>
              <td><?php echo $Row["ph_no"]; ?></td>
              <td><?php echo $Row["mob_no"]; ?></td>  
              <td><?php echo $Row["address"]; ?></td> 
            </tr>
            <tr>
                    <td><a  class="btn btn-warning my-3" href='updateid.php?id=<?php echo $Row['id'];?>'>Update</a></td>
                    <td><a  class="btn btn-warning my-3" href='updatename.php?id=<?php echo $Row['id'];?>'>Update</a></td>
                    <td><a  class="btn btn-warning my-3" href='updateemail.php?id=<?php echo $Row['id'];?>'>Update</a></td>
                    <td><a  class="btn btn-warning my-3" href='updatemobileno.php?id=<?php echo $Row['id'];?>'>Update</a></td>
                    <td><a  class="btn btn-warning my-3" href='updatephoneno.php?id=<?php echo $Row['id'];?>'>Update</a></td>
                    <td><a  class="btn btn-warning my-3" href='updateaddress.php?id=<?php echo $Row['id'];?>'>Update</a></td>

                </tr>
            <?php
        }
 ?>
         </tbody>
      </table>
     </div>
   </div>
  </div>
</body>
</html>