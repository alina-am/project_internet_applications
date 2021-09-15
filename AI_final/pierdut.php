<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Găsit/Pierdut</title>
    <link rel="stylesheet" type="text/css" href="./css/pierdut-style.css"> 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="imagini/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>

  <?php include("menu.php"); ?>

    <div class="main">


      <form action="" method="">
        <h1>Adaugă un câine/o pisică</h1>        
        
        <label for="animal">Am</label>
        <input type="radio" id="gasit" name="gasit">
        <label for="gasit">Găsit</label>
        <input type="radio" id="pierdut" name="pierdut">
        <label for="pierdut">Pierdut</label>
        <br><br>


        <label for="lname"></label>
        <input type="text" id="lname" name="firstname" placeholder="Numele tău">
        
        <label for="fname"></label>
        <input type="text" id="fname" name="firstname" placeholder="Prenumele tău">

        <br><br>

        <label for="animal">Animal:</label>
        <input type="radio" id="caine" name="caine">
        <label for="caine">Caine</label>
        <input type="radio" id="pisica" name="pisica">
        <label for="pisica">Pisica</label>
        
        <br><br>

        <label for="cars">Rasa:</label>
        <select id="breed" name="breed">
          <option value="bichon">Bichon</option>
          <option value="border-collie">British shorthair</option>
          <option value="bloodhound">Bloodhound</option>
          <option value="bloodhound">Akita Inu</option>
          <option value="bloodhound">Siameză</option>
        </select>

        <label for="nume">&emsp; Nume:</label>
        <input type="text">

        <br><br>
        <!-- urcat imagini -->

        <label for="mesaj">Unde ai gasit/pierdut animăluțul?</label> <br>
        <textarea name="mesaj" cols="35" rows="5" placeholder=""></textarea>

        <br><br>

        <input type="submit" value="Trimite" onclick="popUp()">
      </form>

      

    <h1>Animale găsite </h1>
    <div class="images">
      
      <div class="card">
        <img class="image" src="./imagini/adopta/gasit1.jpg" alt="">
        <div class="invisible">
          <div class="text">Necunoscut<br><br>
            A fost găsit în Craiova</div>
        </div>
      </div>         
      
      <div class="card">
        <img class="image" src="./imagini/adopta/gasit2.jpg" alt="">
        <div class="invisible">
          <div class="text">Necunoscut<br><br>
            A fost găsit în Constanța</div>
        </div>
      </div> 
      
      <div class="card">
        <img class="image" src="./imagini/adopta/gasit3.jpg" alt="">
        <div class="invisible">
          <div class="text">Necunoscut<br><br>
            A fost găsit în București</div>
        </div>
      </div> 

      <div class="card">
        <img class="image" src="./imagini/adopta/gasit4.jpg" alt="">
        <div class="invisible">
          <div class="text">Necunoscut<br><br>
          A fost găsit în Pitești</div>
        </div>
      </div>
    </div>
    
    
  </div> <!-- main -->
  <button onclick="topFunction()" id="scrollup" >&#8686;</button>
  
  <?php include("footer.php"); ?>

</body>

<script type="text/javascript" src="./js/pierdut.js"></script>
</html>