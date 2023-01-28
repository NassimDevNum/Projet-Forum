<?php

session_start();
//si le user veut se déconnecté on libére la variable de session prenom
if (isset($_POST["logout"])) {
    unset($_SESSION["login"]);
    header("location: index.php");
}
?>

<!DOCTYPE HTML>
<html>
<!-- pour inclure tous les liens css générals-->
<?php require ("head.php");?>
<body>
<!-- pour inclure le header (accueil / appartements / equipements / a propos de nous / connexion )-->
    <?php require ("header.php");?>
<!-- on mets le corps de la page -->
<div style="text-align: center;">
    <div style="background: white;
    width: 40%;
    margin: auto;
    border-radius: 6px;">
       <div style="width: 70%;
    text-align: left;
    margin: auto;">
        <div><h4 style="display: inline">login : </h4><?php echo utf8_encode($_SESSION["login"]);?></div>
        <div><h4 style="display: inline">email : </h4><?php echo utf8_encode($_SESSION["email"]);?></div>
        <div><h4 style="display: inline">date inscription : </h4><?php echo utf8_encode($_SESSION["date_inscrip"]);?></div>

      
    <form method="post">

        <input style="    padding: 0em 1.0em;
    margin: 2% 0%;" type = "submit" value = "Déconnexion" name = "logout">
    </form>
</div>
    </div>
</div>

    </div>
<!-- pour inclure le footer-->
<?php require ("footer.php");?>
<!-- pour inclure les fichiers js -->
<?//php require ("script_js.php");?>
</body>
<script>
    //pour encadrer le button connexion dans le header
    set_currentPage("connexion");
</script>

