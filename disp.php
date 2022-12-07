<?php

@include 'config.php';

session_start();
if(!isset($_SESSION['admin_id'])){
   header('location:index.php');
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Admin Page</title>


    <style type="text/css">
      body{
        background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
      }
    .navbar{
        background: -webkit-linear-gradient(to right, #5bc0de, #fff);  
          background: linear-gradient(to right, #5bc0de, #fff);
    }
    .thead{
        background: -webkit-linear-gradient(to right, #5bc0de, #fff);  
          background: linear-gradient(to right, #5bc0de, #fff);
    }
    .tbody{
        background: -webkit-linear-gradient(to right, #5bc0de, #fff);  
          background: linear-gradient(to right, #5bc0de, #fff);
    }
    </style>



  </head>
  <body>
  <!--Starts Here NavBar-->
 <nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><h3>My Library</h3></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto mb-2 mb-lg-0 ">
        <a class="nav-link" href="#">  
            <?php $sql = "SELECT name FROM user_form 
                    WHERE id='".$_SESSION['admin_id']."';";
                    $results = mysqli_query($conn, $sql);
                    $res = mysqli_num_rows($results);
                    if($res>0)
                    {
                      while($row = mysqli_fetch_array($results)){
                        echo $row['name'];
                      }
                    }
                    ?></a>
        <a class="nav-link" href="logout.php">Log out</a>      
      </div>
    </div>
     </div>
</nav>
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
                  <th scope="col">User type</th>
                  <th scope="col">Update</th>
                  <th scope="col">Delete</th>
                </tr>
              </thead>
        <tbody class="tbody">      
	<?php
//  require "config.php";
 $query = "SELECT * FROM user_form;";
 $result = mysqli_query($conn, $query);
 if (mysqli_num_rows($result) > 0) {
     while ($Row = mysqli_fetch_assoc($result)) { ?>
           <tr>
              <td><?php echo $Row["id"]; ?></td>
              <td><?php echo $Row["name"]; ?></td>
              <td><?php echo $Row["email"]; ?></td>
              <td><?php echo $Row["ph_no"]; ?></td>
              <td><?php echo $Row["mob_no"]; ?></td>  
              <td><?php echo $Row["address"]; ?></td> 
              <td><?php echo $Row["user_type"]; ?></td>  
              <td><a  class="btn btn-warning my-3" href='update.php?id=<?php echo $Row['id'];?>'>Update</a></td>
              <td><a  class="btn btn-danger my-3" href='del.php?id=<?php echo $Row['id'];?>' >Delete</a></td>

            </tr>
            <?php 
            }
         }
 ?>
         </tbody>
      </table>
     </div>
   </div>
  </div>
</body>
</html>