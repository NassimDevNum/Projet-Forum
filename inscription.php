<?php
require ("controleur/controleur.php");
if(isset($_POST['inscription'])){

    $cont = new Controleur();
    $error = " ";
    $login = $_POST['login'];
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    if(!preg_match("#^[a-zA-Z0-9@]+$#",$login))
    {
        $error .= "Le login n'est pas conforme<br>";
    }
    if(!preg_match("#^[a-zA-Z0-9._&@]{6,12}$#",$mdp))
    {
        $error .="mot de passe invalide<br>";
    }
    if(!preg_match("#^[a-z0-9_.-]+@[a-z0-9]+.[a-z]{2,6}$#",$email)){
        $error .="mail  invalide<br>";
    }

    if($error == " "){
        

    //
    $cont->Inscription($login,$email,$mdp);
    ?>
    <script>alert("Vous étes bien inscrit!! ")</script>
    <?php
    header("location: index.php");
}
else
{
    echo '
    <div class="alert alert-danger" role="alert">'.
        $error
    .'</div>';
}
}
?>

<!DOCTYPE HTML>
<html>
<?php require ("head.php");?>
<body>
<?php require ("header.php")?>
    <!-- Main -->
    <div id="main-wrapper">
        <h1 id ="titre">Inscription</h1>
        <div class="container">

            <div id="container_connexion" class="col-md-6">
                <!-- Content -->
                <article>
                    <?php include("vue/vueInscription.php"); ?>
                </article>
            </div>
        </div>
    </div>

    </div>
<?//php require ("footer.php");?>
<?//php require ("script_js.php");?>
</body>

</body>
<?php if (isset($_POST["false"])){?>
    <script type="text/javascript">
        document.getElementById("name_user").innerHTML = "Nom d'utilisateur ou mot de passe incorrect";
        document.getElementById("name_user").style.color = "red";
        set_currentPage("connexion");
    </script>
    <?php
    unset($_POST["false"]);
}?>
</html>