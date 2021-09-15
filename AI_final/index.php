<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Adopții animale</title>
    <link rel="stylesheet" type="text/css" href="./css/index-style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="imagini/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  </head>
  <body>
  <?php include("menu.php"); ?>

    <div class="main">

      <div id="intro">
        <h1>Adopții animale Iași</h1>

        <img src="./imagini/background.png" alt="cute cats and dogs">
        <a class="button" href="./adopta.php">Adoptă-ne!</a>
      </div>


      <div id="info">
        <p id="despre"><b>Centrul de adopții animale Iași</b>
        <br><br>&emsp;Există foarte multe animale care au nevoie de o casă nouă și este vital ca aceste animale să fie promovate cât mai mult în mediul online pentru a mări șansele considerabil de a merge spre un nou cămin. Acest site este independent, nu aparține niciunei companii sau vreunui ONG. Pur și simplu, a fost creat pentru a veni în sprijinul animalelor, dar și a iubitorilor de animale. Absolut oricine poate posta aici anunțuri gratuite, fie că a pierdut un animal, a găsit unul sau vrea să ofere spre adopție.</p>
      </div>


      <div id="motive">
        <h2><span>De ce să adopți un animal?</span></h2>
        <ul>
          <li>Oferi o șansă unui animal al străzii</li>
          <li>Combați comerțul ilegal cu animale de companie</li>
          <li>Înveți ce inseamnă responsabilitatea</li>
          <li>Câștigi un prieten pe viață</li>
        </ul>
      </div>

      <div id="cards">

        <div class="card">
          <img src="./imagini/card1.png">
          <h3>Informații</h3>
          <p>&emsp; Alegerea unui animal de companie este precum alegerea unui coleg de apartament. Trebuie să te asiguri că obiceiurile tale și stilul de viață își permit să trăiești pe termen lung lângă un câine sau o pisică. Fiecare animal are diferite nevoi când vine vorba de îngrijire, comportament, cost, alimentație  sau dresaj. </p>          
        <a class="button" href="./informatii.php">Află mai multe!</a>
        </div>

        <div class="card">
          <a  href="./adopta.php"><img src="./imagini/card2.png"></a>
          <h3>Găsește animalul potrivit</h3>       
          <p>&emsp;Adopția unui animal de la un adăpost îți poate aduce incredibil de multă împlinire, iar ei îi oferă o a doua șansă la viață. Sunt multe animale în căutarea unei case primitoare. Fiecare are propria poveste și multe și-au pierdut prima casă fără vina lor și și-ar dori să devină parte din a ta. Centrele recunoscute vor acorda multă atenție potrivirii dintre oameni și animale, având personal pregătit să te ajute cu sfaturi și să îți răspundă la orice eventuale întrebări.</p>
        <a class="button" href="./adopta.php">Adoptă-ne!</a>
        </div>

      </div><!-- cards-->


    </div>  <!-- main -->

    <?php include("footer.php"); ?>

  </body>

  <script type="text/javascript" src="./js/index.js"></script>
</html>
