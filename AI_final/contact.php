<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src=".\js\contact.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/contact-style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="imagini/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <?php include("menu.php");?>
    <title>Contact</title>
</head>
<body>
    
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" type="text/css" href="./css/contact-style.css">
</head>
<body>


    <div class="main">

      <div id="info">
     
        <iframe id="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2712.980127560048!2d27.59724131513562!3d47.15824362683606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40cafb9ab9c760d1%3A0x7f4ea258f31a0729!2zQVNPQ0lBxaJJQSBDTE9QT8WiRUw!5e0!3m2!1sro!2sro!4v1618839568153!5m2!1sro!2sro"  allowfullscreen="" loading="lazy"></iframe>

        <div id="text">
          <h1>Centrul de adoptii animale Iași</h1>
          <p class="details">Adresa: Bld. Tudor Vladimirescu nr. 78<br></p>

          <p class="program">Program: <br>
            Luni - Vineri: 9 - 17<br>
            Sambata - Duminica: 9 - 13
          </p>        

          <div id="social">
            <a href="https://www.facebook.com/" target="_blank"><img src="./imagini/social/facebook.png" alt="Facebook"></a>
            <a href="https://www.instagram.com/" target="_blank"><img src="./imagini/social/instagram.png" alt="Instagram"></a>
            <a href="https://web.whatsapp.com/" target="_blank"><img src="./imagini/social/whatsapp.png" alt="Whatsapp"></a>
          </div>
        </div>
      </div>

      <form  method="post">
        <h2>Formular de contact</h2>

        <label for="fname"></label>
        <input type="text" id="fname" name="firstname" placeholder="Prenume">
        
        <label for="lname"></label>
        <input type="text" id="lname" name="lastname" placeholder="Nume">
        
        <br><br>

        <label for="message">Ce vrei sa ne transmiti?</label> <br>
        <textarea id="message" name="mesaj" cols="40" rows="5" placeholder=""></textarea>
        
        <br><br>

        <input type="submit" name='submit' value="Trimite" onclick="popUp()">
      </form>

    </div>  <!-- main  -->

  <!--inserare in baza de date-->
    <?php include("footer.php"); ?>
    
    <?php
    //echo "<b>Test conexiune la o baza de date</b><br />";
    // realizare conexiune MySQL
    $conn = new mysqli("localhost","root","");
    if ($conn->connect_error)
    //{
        die('Conexiunea nu a putut fi realizata: ' . $conn->connect_error);
    //}
    //else echo "<br /> Conexiunea a fost realizata!! <br />";

    // selectare baza de date
    $conn->select_db('adoptii_animale');
    if(isset($_POST['submit'])){
      $sql="INSERT INTO contact (nume, prenume, comentarii) VALUES
      ('$_POST[lastname]','$_POST[firstname]','$_POST[mesaj]')";
      if (!mysqli_query($conn,$sql))
      //{
        die('Eroare: ' . $conn->connect_error);
     //}
      //echo "A fost adaugata o inregistrare! <br />";
    }
    // inchidere conexiune
    mysqli_close($conn);
    //echo "<br /> Conexiunea a fost inchisa!! <br />";   
?>

</body>
</html>


