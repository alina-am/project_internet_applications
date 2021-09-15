<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/admin-style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="imagini/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php include("menu.php");?>
    <title>Admin</title>
</head>
<body>

<div class="main">

  <h1>Review-uri utilizatori</h1>

  <?php

    // echo "<b>Test conexiune la o baza de date</b><br />";

    // realizare conexiune MySQL
    $con = mysqli_connect("localhost","root","");
    if (!$con)
    {
      die('Conexiunea nu a putut fi realizata! ' . mysql_error());
    }
    // else echo "<br /> Conexiunea a fost realizata!! <br />";   

    // selectare baza de date
    mysqli_select_db($con, "adoptii_animale");

    // selectare inregistrari din tabela
    $rez = mysqli_query($con, "SELECT id, nume, prenume, comentarii from contact");

    // afisare rezultate
    while($inreg = mysqli_fetch_array($rez))
    {
      echo "<div>
      <h2>";
      echo $inreg['prenume']. " " . $inreg['nume'];
      echo "</h2>
      <h4>ID mesaj: ";
      echo $inreg['id'];
      echo "</h3>
      <p>";
      echo $inreg['comentarii'];
      echo "</div><br/>";

    }
    // inchidere conexiune
    mysqli_close($con);
    // echo "<br /> Conexiunea a fost inchisa!! <br />";
  ?>
  
  </div>
    <?php include("footer.php"); ?>
</body>

<script type="text/javascript" src="./js/contact.js"></script>
</html>