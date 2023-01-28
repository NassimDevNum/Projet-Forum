<div style="margin-top: 1%; text-align: center;">
    <div id="logo">
        <a href="index.php"></a>
    </div>
</div>
<div id="page-wrapper">
    <!-- Header -->
    <div id="header-wrapper">
        <header id="header" class="container">

            <!-- Logo -->
            <div id="logo">
                <h1><a href="index.php">dev&Blog</a></h1>
                <!--<span>by </span> -->
            </div>
            <!-- Nav -->
            <nav id="nav">
                <ul>

                    <li id="accueil"><a href="index.php">Accueil</a></li>
                    <li id="equipements"><a href="inscription.php">inscription</a> </li>
                     <li id="connexion">
                        <?php if (isset($_SESSION["type"]) && $_SESSION["type"] == "admin" && isset($_SESSION["login"]))
                        {
                            echo '<a> <i class="fa fa-user" aria-hidden="false"></i>';
                            echo $_SESSION["login"] . '</a>';
                            echo '
                            <ul id="menu-accordeon">
                                <li><a href="connexion.php">Mon profile</a></li>
                                <li><a href="gestion_sujet.php">Contrats de gestion</a></li>
                           
                            </ul>';
                        }
                        else {
                            echo '<a href="connexion.php">
                                <i class="fa fa-user" aria-hidden="false"></i>';
                            if (isset($_SESSION["login"]))
                                echo $_SESSION["login"];
                            else echo "connexion";
                            echo '</a>';
                        }
                        ?>
                    
                    </li>
                </ul>
            </nav>
        </header>
    </div>


