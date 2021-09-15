<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Adoptă</title>
    <link rel="stylesheet" type="text/css" href="./css/adopta-style.css"> 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="imagini/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>

  <?php include("menu.php"); ?>

  <?php
    //echo "<b>Test conexiune la o baza de date</b><br />";
    // realizare conexiune MySQL
    $conn = new mysqli("localhost","root","");
    if ($conn->connect_error)
    //{
        die('Conexiunea nu a putut fi realizata: ' . $conn->connect_error);
    //}

    // selectare baza de date
    $conn->select_db('adoptii_animale');
  ?>

    <div class="main">

      <h1>Adoptă un câine sau o pisică</h1>
      <div class="images">

        <div class="card">
          <img class="image" src="./imagini/adopta/adopta1.jpg" alt="">
          <div class="invisible">
            <div class="text">Moacă<br>
              <p><span>Specie: </span> câine<br>
                <span>Rasă: </span> ciobănesc de berna<br>
                <span>Culoare: </span> negru<br>
                <span>Gen: </span> mascul<br>
                <span>Oraș: </span> Constanța<br>
              </p></div>
          </div>
        </div>         
        
        <div class="card">
          <img class="image" src="./imagini/adopta/adopta2.jpg" alt="">
          <div class="invisible">
            <div class="text">LUNA<br>
              <p><span>Specie: </span> câine<br>
                <span>Rasă: </span> metis<br>
                <span>Culoare: </span> negru<br>
                <span>Gen: </span> femelă<br>
                <span>Oraș: </span> București<br>
               </p></div>
          </div>
        </div> 
        
        <div class="card">
          <img class="image" src="./imagini/adopta/adopta3.jpg" alt="">
          <div class="invisible">
            <div class="text">Aura<br>
              <p><span>Specie: </span> pisică<br>
                <span>Rasă: </span> europeană<br>
                <span>Culoare: </span> alb/gri<br>
                <span>Gen: </span> femelă<br>
                <span>Oraș: </span> București<br>
              </p></div>
          </div>
        </div> 

        <div class="card">
          <img class="image" src="./imagini/adopta/adopta4.jpg" alt="">
          <div class="invisible">
            <div class="text">Danu<br>
              <p><span>Specie: </span> pisică<br>
                <span>Rasă: </span> europeană<br>
                <span>Culoare: </span> alb/maro/gri<br>
                <span>Gen: </span> mascul<br>
                <span>Oraș: </span> București<br>
              </p></div>
          </div>
        </div>

        <div class="card">
          <img class="image" src="./imagini/adopta/adopta5.jpg" alt="">
          <div class="invisible">
            <div class="text">Kimi<br>
              <p><span>Specie: </span> câine<br>
                <span>Rasă: </span> beagle<br>
                <span>Culoare: </span> alb,galben<br>
                <span>Gen: </span> mascul<br>
                <span>Oraș: </span> București<br>
              </p></div>
          </div>
        </div> 

        <div class="card">
          <img class="image" src="./imagini/adopta/adopta8.jpg" alt="">
          <div class="invisible">
            <div class="text">Birmi<br>
              <p><span>Specie: </span> pisică<br>
                <span>Rasă: </span> <br>
                <span>Culoare: </span> alb/gri/negru<br>
                <span>Gen: </span> femelă<br>
                <span>Oraș: </span> Brașov<br>
              </p></div>
          </div>
        </div>

        <div class="card">
          <img class="image" src="./imagini/adopta/adopta6.jpg" alt="">
          <div class="invisible">
            <div class="text">Puf<br>
              <p><span>Specie: </span> câine<br>
                <span>Rasă: </span> bichon<br>
                <span>Culoare: </span> alb<br>
                <span>Gen: </span> mascul<br>
                <span>Oraș: </span> București<br>
              </p></div>
          </div>
        </div> 

        <div class="card">
          <img class="image" src="./imagini/adopta/adopta7.jpg" alt="">
          <div class="invisible">
            <div class="text">Tigrina<br>
              <p><span>Specie: </span> pisică<br>
                <span>Rasă: </span> abisiniană<br>
                <span>Culoare: </span> negru/gri<br>
                <span>Gen: </span> femelă<br>
                <span>Oraș: </span> Huși<br>
              </p></div>
          </div>
        </div> 
      </div>
      
      <form action="" method="post">
        <h1>Formular de adoptie</h1>

        <label for="fname"></label>
        <input type="text" id="fname" name="firstname" placeholder="Prenume">

        
        <label for="lname"></label>
        <input type="text" id="lname" name="lastname" placeholder="Nume">
        
        <br><br>

        <label for="animal">Animal:</label>
        <input type="radio" value="caine" name="animal">
        <label for="caine">Caine</label>
        <input type="radio" value="pisica" name="animal">
        <label for="pisica">Pisica</label>
        
        <br><br>

        <label for="breed">Rasa:</label>
        <select id="breed" name="breed">

        <?php

        // selectare inregistrari din tabela
          $rez = mysqli_query($conn, "SELECT rasa from adoptii");

          // afisare rezultate
          while($inreg = mysqli_fetch_array($rez))
          {
            echo "<option value=" ;
            echo $inreg['rasa'];
            echo ">";
            echo $inreg['rasa'];
            echo "</option>";
          }
        ?>

        </select>

    

        <label for="aname">&nbsp; Nume:</label>
        <select id="aname" name="aname">

        <?php

        // selectare inregistrari din tabela
          $rez = mysqli_query($conn, "SELECT nume_animal from adoptii");

          // afisare rezultate
          while($inreg = mysqli_fetch_array($rez))
          {
            echo "<option value=" ;
            echo $inreg['nume_animal'];
            echo ">";
            echo $inreg['nume_animal'];
            echo "</option>";
          }
        ?>
        </select>

        <br><br>

        <label for="mesaj">De ce vrei sa adopti un animal?</label> <br>
        <textarea name="mesaj" cols="35" rows="5" placeholder=""></textarea>

        <br><br>

        <input type="submit" name="submit" value="Trimite" onclick="popUp()">

        
        <div class="modal">
        <h1>My first modal</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas provident, iure nam deserunt facilis sint ipsum ab incidunt omnis voluptatum quisquam, ad distinctio? Eaque quasi ea magnam, quis unde necessitatibus.</p>
        <button id="modalBtn">Close</button>
        </div>
    
    </div> <!-- main -->
    
    
    <button onclick="topFunction()" id="scrollup" >&#8686;</button>
   
  <?php include("footer.php"); ?>
  <?php
    
    if(isset($_POST['submit'])){
      $sql="INSERT INTO adoptii (nume, prenume, animal, rasa, nume_animal, comentarii) VALUES
      ('$_POST[lastname]','$_POST[firstname]','$_POST[animal]','$_POST[breed]','$_POST[aname]','$_POST[mesaj]')";
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
<script src="./js/adopta.js"></script>

</html>


    
  