    <?php
require ("head.php");


require ("controleur/controleur.php");
if (isset($_SESSION["login"]))
    header("location: user_profil.php");
if(isset($_POST['login']) && isset($_POST['mdp'])){
    $cont = new Controleur();
    //pour la sécurité contre les injections sql et les failles xss
    $login = htmlspecialchars($_POST['login']);
    $mdp = htmlspecialchars($_POST['mdp']);
    $count = $cont->connexion($login, $mdp);
    if ($count == 0)
        $_POST['false'] =  "yes";
}
?>

<!DOCTYPE HTML>
<!--
	Verti by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CC   A 3.0 license (html5up.net/license)
-->
<html>
<?php require ("head.php");?>
<body>
<?php require ("header.php");?>
    <!-- Main -->
    <div id="main-wrapper"><h1 id ="titre">Je suis inscris</h1>
        <div class="container">

            <div id="container_connexion" class="col-md-6">

                <!-- Content -->
                <article>
                    <h2 style="text-align: center;">Connexion</h2>
                    <?php include("vue/vueConnexion.php"); ?>
                </article>

            </div>
        </div>
    </div>

<?php require ("footer.php");?>

</div>

<?//php require ("script_js.php");?>
<script>
    set_currentPage("connexion");
</script>
</body>
<?php if (isset($_POST["false"])){?>
    <script type="text/javascript">
        document.getElementById("name_user").innerHTML = "Nom d'utilisateur ou mot de passe incorrect";
        document.getElementById("name_user").style.color = "red";
    </script>
    <?php
    unset($_POST["false"]);
}
    ?>
</html>