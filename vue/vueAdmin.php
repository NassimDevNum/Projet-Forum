<?php
    include ("controleur/controleur.php");
    require ("functions.php");
  // session n'est pas déclarer on redirgie l'utilisateur vers la page de connexion
if(!$_SESSION["login"]){
    header('Location: connexion.php');
}
?>


<!DOCTYPE html>
<html>
<?php require ("head.php");?>
<body>
<?php require ("header.php")?>
    
        <title>publierUnArticle</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form method="POST" action="">
            <input type="text" name="titre">
            <br>
            <textarea name="contenue"></textarea>
            <br>
            <input type="submit" name="valider">
        </form>
        <?php
        $recupArticles = $bdd->query('SELECT * FROM sujet');
        while($article = $recupArticles->fetch()){
            ?>
            <div class="article" style="border: 3px solid red;">
                <h1> <?= $article['tittre'];?></h1>
                <br>
                <p><?= $article['contenue'];?></p>
                <a href="gestionartciles.php?id=<?= $article['id_c']; ?>">
                <input type="submit" name="envoie">   Supprimer l'article</button>
                
            </a>
            </div>
            <br>
            <?php
            
            $recupUsers = $bdd->query('SELECT * FROM user'); //on lance une requette pour récup tous les membres de la bdd
            while($user = $recupUsers->fetch()){ //et dans la boucle on est venu tous les récup de la table
               // echo $user['login']; // et ici on affiche juste le login
                ?>
                
                <p><?= $user['login']; ?> <a href="superession_utilisateur.php?id_user=<?= $user['id_user']; ?>" style="color:red;text-decoration:none;">Bannir le membre</a></p>
                <?php
                }
                ?>
      
       
    </body>
</html>