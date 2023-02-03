<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SnowStorm</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="custom_clavier.css">

  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>  
            
    <header>

      <!--------------------------------------------------Effet Neige et LOGO------------------------------------------------- -->

      <div class="snow">
        <div class="flex-header">
            <div class="left-header">
                <img class="imgLogoSS" src="img/logoSS.png" alt="Logo de SnowStorm">
                <img src="img/SNOWSTORMGG.png" alt="SnowStorm.gg">
            </div>



      <!-- -------------------------------------------------------Icone Header------------------------------------------------------ -->

            <div class="right-header">
                <a href="#"><img id="imgSacShopping" src="img/cadie.png" alt="image d'un sac de shopping"></a>
                <a href="#"><img id="imgMonCompte" src="img/logocompte.png" alt="logo de mon compte"></a>
                <a href="#"><img id="imgLangue" src="img/logofrance.jpg" alt="logo du drapeau français"></a>
                
            </div>
        </div>
      </div>
    </header>



    <!-- --------------------------------------------------NAVBAR----------------------------------------------------------------------- -->

    <nav class="navbar">
           
        <a href="#">NOS PRODUITS</a>
        <a href="custom.php">PERSONNALISER</a>
        <a href="galerie.php">GALERIE</a>
        <a href="support_sav.php">SUPPORT/SAV</a>
        <a href="#">FAQ</a>
        <a href="contact.php">CONTACT</a>
        <input type="text" placeholder="Rechercher">
        
    </nav>

    <!----------------------------------------------------Etape de Personnalisation----------------------------------------------------------------------->

    <h3> Etape 1 : choix du clavier</h3>
    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
        <div class="btn-group" role="group" aria-label="Basic outlined example">
          <a href="custom_clavier1_etape2.php" class="btn btn-outline-secondary  btn-lg">Etape 2</a>
          <a href="custom_clavier1_etape3.php" class="btn btn-outline-secondary  btn-lg">Etape 3</a>
          <a href="custom_clavier1_etape4.php" class="btn btn-outline-secondary  btn-lg">Etape 4</a>
        </div>
        <div class="btn-group col-6 justify-content-md-end" role="group" aria-label="Second group">
          <button class="btn btn-outline-secondary btn-lg" type="button">Sauvgarder ma configuration</button>
        </div>
    </div>

    <!-------------------------------------------Image------------------------------------------>
    <div class="snowstorm-image" style="background-image: url();"></div>

    <!-------------------------------------------Switch---------------------------------------->
    <h3> Choix du switch :</h3>
    <a href="https://youtu.be/gyZZQxA3Vwc" target="_blank" rel="noopener noreferrer">Comment choisir son switch</a>
    <div>
        <label for="keyboard switch">Switch disponible :</label>
        <select name="keyboard switch" id="keyboard switch">
            <option value="Cherry mx red rgb">Cherry mx red rgb</option>
            <option value="Cherry mx blue rgb">Cherry mx blue rgb</option>
            <option value="Cherry mx black rgb">Cherry mx black rgb</option>
            <option value="Cherry mx brown rgb">Cherry mx brown rgb</option>
        </select>
    </div>
    <!-----------------------------------------------Couleur base clavier--------------------------------->

    