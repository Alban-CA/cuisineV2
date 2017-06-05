<script type="text/javascript" href="http://localhost/projet/sitecuisineV2/js/JScuisine.js"></script>
<?php
        include 'includes/header.php';
        /*include 'pages/recettes/recettes.php';*/
        include 'includes/util.inc.php';
?>  

<h1>Cuisine Pour Deux</h1>

<?php
    include 'includes/menu.php';
    if(isset($_GET['choix'])){
    $choi = $_GET['choix'];
    }

$db = new PDO('mysql:host=localhost;dbname=formation-poec','root','');/*à definir apres création du serveur*/
?>

<h1>Recette du jour</h1>


<form action="post.php" method="POST">
    <label>Email: </label>
    <input name="email" type="email" placeholder="Tapez votre email">
 
    <label> mot de passe </label>
    
    <input name="pass" type="password" placeholder=" Tapez votre mot de passe">

</form>


<?php

$choix = ["Entrées","Plats","Desserts", "Rapides","En Amoureux"];
    echo "<select>";
    foreach ($choix as $choi ) {
    echo "<option>" . $choi . "</option>";
    }
    echo "</select>";
?>
    <input type="submit" value="Valider">

            <div id="searchbar"> 
                <form class="formulaire">
                <input class="champ" type="text" value="Recherche"/>
                <img class="loupe" src="images/loupe.jpg"/>
                </form>
            </div>
       
        <main>
        <div><h2>Recette du Jour</h2></div>
        <div id="cfs-carrousel">
            <div id="wrapper">
                <div id="carrousel">
                    <div><img src="images/caroussel/artisucre.jpg"></div>
                    <div><img src="images/plats/canard.jpg"></div>
                    <div><img src="images/caroussel/asperges.jpg"></div>
                    <div><img src="images/caroussel/patch3.jpg"></div>
                    <div><img src="images/caroussel/taboule.jpg"></div>
                    <div><img src="images/caroussel/verrines.jpg"></div>
                    <div><img src="images/caroussel/patch1.jpg"></div>
                    <div><img src="images/caroussel/bava_fruits.jpg"></div>
                    <div><img src="images/plats/maca_caramel.jpg"></div>
                    <div><img src="images/caroussel/tournesol.jpg"></div>
                    <div><img src="images/caroussel/patch2.jpg"></div>
                </div> 
            </div>
        </div>
         
        <button id="prev">prev</button>
        <button id="next">next</button>
        </main>

<!-- <script type="text/javascript" href="http://localhost/projet/sitecuisineV2/js/JScuisine.js"></script> -->

    
<?php include 'includes/footer.php'; ?>