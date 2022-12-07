<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:index.php');
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Malaria relif</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="user.css">
    <link rel="stylesheet" href="style.css">
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>

<?php require 'partials/_nav.php'?>

<div class="container">
    <div class="main-body">
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?php echo $_SESSION['user_name'] ?></h4>
                      <p class="font-size-sm">     
                        <?php $sql = "SELECT address FROM user_form 
                    WHERE name='".$_SESSION['user_name']."';";
                    $results = mysqli_query($conn, $sql);
                    $res = mysqli_num_rows($results);
                    if($res>0)
                    {
                      while($row = mysqli_fetch_array($results)){
                        echo $row['address'];
                      }
                    }
                    ?></p>
                    </div>
                  </div>
                </div>
                <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name :</h6>
                    </div>
                    <div class="col-sm-9">
                    
                    <?php echo $_SESSION['user_name'] ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email :</h6>
                    </div>
                    <div class="col-sm-9">

                    <?php $sql = "SELECT email FROM user_form 
                    WHERE name='".$_SESSION['user_name']."';";
                    $results = mysqli_query($conn, $sql);
                    $res = mysqli_num_rows($results);
                    if($res>0)
                    {
                      while($row = mysqli_fetch_array($results)){
                        echo $row['email'];
                      }
                    }
                    ?>

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Mobile :</h6>
                    </div>
                    <div class="col-sm-9">

                    <?php $sql = "SELECT mob_no FROM user_form 
                    WHERE name='".$_SESSION['user_name']."';";
                    $results = mysqli_query($conn, $sql);
                    $res = mysqli_num_rows($results);
                    if($res>0)
                    {
                      while($row = mysqli_fetch_array($results)){
                        echo $row['mob_no'];
                      }
                    }
                    ?>

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone :</h6>
                    </div>
                    <div class="col-sm-9">
                    <?php $sql = "SELECT ph_no FROM user_form 
                    WHERE name='".$_SESSION['user_name']."';";
                    $results = mysqli_query($conn, $sql);
                    $res = mysqli_num_rows($results);
                    if($res>0)
                    {
                      while($row = mysqli_fetch_array($results)){
                        echo $row['ph_no'];
                      }
                    }
                    ?>

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address :</h6>
                    </div>
                    <div class="col-sm-9">
                    <?php $sql = "SELECT address FROM user_form 
                    WHERE name='".$_SESSION['user_name']."';";
                    $results = mysqli_query($conn, $sql);
                    $res = mysqli_num_rows($results);
                    if($res>0)
                    {
                      while($row = mysqli_fetch_array($results)){
                        echo $row['address'];
                      }
                    }
                    ?>

                    </div>
                  </div>
                  <hr>
                </div>
              </div>
            </div>
          </div>
         </div>
         <a  href="logout.php"><button style="width: 11rem; height: 3rem; border-radius: 0.5rem; text-align: center; background-color: aqua;;">Logout</button></a>
        </div>
    </div>
    <?php require 'partials/_footer.php'?>

</body>
</html>