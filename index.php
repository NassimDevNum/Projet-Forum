<?php
    include ("controleur/controleur.php");
    require ("functions.php");
?>

<!DOCTYPE HTML>
<html>
    <?php require ("head.php");?>

    <body>
    <?php require ("header.php");?>
     
    <div id="banner-wrapper">
        <div id="banner" class="box container">
            <div class="row">
                <div class="5u 12u(medium)">
                    <ul>
                        <li><a style = "font-size: 1.6em;" href="connexion.php" class="button big icon fa-arrow-circle-right">Je me connecte</a></li>
                        <li><a style = "font-size: 1.6em;" href="inscription.php" class="button alt big icon fa-arrow-circle-right">Je m'inscris</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Features -->
    <div id="features-wrapper">
        <div class="container">
            <div class="row">
                <?php
                if (isset($_SESSION["login"])
            )
                 fetch_post_index();
                else
                    fetch_post_accueil();
                ?>
            </div>
        </div>
    </div>

    <!-- Main -->
    <div id="main-wrapper">
        <div class="container">
            <div class="row 200%">
            
                <div class="8u 12u(medium) important(medium)">



                </div>
            </div>
        </div>
    </div>

    </div>
    <?php require("footer.php"); ?>
    
<script>
    set_currentPage("accueil");
</script>
    </body>
</html>