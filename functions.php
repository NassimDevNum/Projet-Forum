<?php

function fetch_post_index(){
    $cont = new Controleur();
    $tab = $cont->fetch_post();
    foreach ($tab as $tab_tmp)
    {
        echo '<div class="4u 12u(medium)">';
        echo '<section class="box feature">';
        echo ' <a  class="image featured"><img src="images/' . $tab_tmp["image"] . '.png" alt="" /></a>';
        echo '<div class="inner">';
        echo ' <header>';
        echo '<h2>' . utf8_encode($tab_tmp["theme"]) .' / '. utf8_encode($tab_tmp["tittre"]) . '</h2>';
        echo '<p>' . $tab_tmp['date_ajout'].'</p>';
          echo ' <a href="singel.php?id= ' . $tab_tmp["id"] .'"> <button  class="but_contacter">commentaire </button> </a>';
        echo ' </header>';
        echo '</div>';
        echo '</section>';
        echo '</div>';
    }
}

function fetch_post_accueil(){
    $cont = new Controleur();
    $tab = $cont->fetch_post();
    foreach ($tab as $tab_tmp)
     {
        echo '<div class="4u 12u(medium)">';
        echo '<section class="box feature">';
        echo ' <a  class="image featured"><img src="images/' . $tab_tmp["image"] .'.png" alt="" /></a>';
        echo '<div class="inner">';
        echo ' <header>';
        echo '<h2>' . utf8_encode($tab_tmp["theme"]) .' / '. utf8_encode($tab_tmp["tittre"]) . '</h2>';
        echo '<p>' . $tab_tmp['date_ajout'].'</p>';
        
        echo ' </header>';
        echo '</div>';
        echo '</section>';
        echo '</div>';
    }
    function auth($lvl = 1){

        if(!isset($_SESSION['connect']) || $_SESSION['connect'] != true)
        {
          header("Location:index.php");
          die();
        }
        if($_SESSION['lvl'] < $lvl)
        {
          header("Location:user_profil.php");
          die();
        }
      
      }
      
}


/*

function fetch_appartementsProp($id)
{
    $cont = new Controleur();
    $tab = $cont->fetch_appartementsProp($id);
    foreach ($tab as $tab_tmp)
    {
        echo '<div class="4u 12u(medium)">';
        echo '<section class="box feature">';
        echo ' <a  class="image featured"><img src="imagesAppartement/' . $tab_tmp["LIENPHOTO"] . '.jpg" alt="" /></a>';
        echo '<div class="inner">';
        echo ' <header>';
        echo '<h2>' . $tab_tmp["NOMR"] .' / '. $tab_tmp["NOMV"] . '</h2>';
        echo '<p>' . $tab_tmp['TYPEAPPART'] .' / ' . $tab_tmp["SURFACE"] .'m²'  .'</p>';
        echo '<p>' . $tab_tmp['PRIX_BASE'].' Euros' . '</p>';
        echo '<button value = "appartement ref : ' . $tab_tmp["IDAPPARTEMENT"] . '" onclick="getInfo(' . $id . ',' . $tab_tmp["IDAPPARTEMENT"] . ')">Infos</button>';
        echo ' </header>';
        echo '</div>';
        echo '</section>';
        echo '</div>';
    }
}

function fetch_contratsProp($id)
{
    $cont = new Controleur();
    $tab = $cont->fetch_ContratProp($id);
    foreach ($tab as $tab_tmp)
    {
        echo "  <tr class='table-success'>
                    <td>".$tab_tmp['IDC']."</td>
                    <td>".$tab_tmp['IDAPPARTEMENT']."</td>
                    <td>".$tab_tmp['DATESIGNATUREC']."</td>                   
                    <td>".$tab_tmp['DATEDEBUT']."</td>
                    <td>".$tab_tmp['DATEFIN']."</td> 
                    <td>".$tab_tmp['ETAT']."</td>                                        
                </tr>";
    }
}

function fetch_StatAppar($id)
{
    $cont = new Controleur();
    $tab = $cont->fetch_StatAppar($id);
    foreach ($tab as $tab_tmp)
    {
        echo "  <tr class='table-success'>
                    <td>".$tab_tmp['ANNEE']."</td>
                    <td>".$tab_tmp['APPARTEMENT']."</td>
                    <td>".$tab_tmp['ADRESSEAPP']. " " . $tab_tmp['CODEPOSTAL']. "</td>                   
                    <td>".$tab_tmp['NBRESERVATIONS']."</td>                                      
                </tr>";
    }
}

function fetch_StatEqui($id)
{
    $cont = new Controleur();
    $tab = $cont->fetch_StatEqui($id);
    foreach ($tab as $tab_tmp)
    {
        echo "  <tr class='table-success'>
                    <td>".$tab_tmp['QUANTITE']."</td>
                    <td>".$tab_tmp['MATERIEL']."</td>
                    <td>".$tab_tmp['NBLOCATION']."</td>                                      
                </tr>";
    }
}
*/