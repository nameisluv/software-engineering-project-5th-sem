<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Malaria relif</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="index.js"></script>
    <script src='main.js'></script>
</head>
<body>
<?php require 'partials/_chat.php'?>
<?php require 'partials/_nav.php'?>
<section class="Feedback txt padd info" id="Feedback">
    <h1 style="text-align:center;">Register for consultation</h1>
    <h4 style="text-align:center;">We would love to hear from you!</h4>
 <div>
<form class="cont1" form action="https://formsubmit.co/4d8dcc8bf660ba2c9f30984f80346494" target="_blank" method="POST">
  <input type="text" name="name" placeholder="Fulll Name" required>
  <input type="text" name="email" placeholder="Email Id" required>
   <textarea name="message" placeholder="Type your problem and symptoms" required></textarea>
  <div class="d-flex justify-content-center"><button class="submit-btnn" id="btnn" type="submit">Submit</button></div>
</form>
 </div>
</section>
<?php require 'partials/_footer.php'?>

</body>
</html>