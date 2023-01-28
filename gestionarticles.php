<h2>  Gestion des  artciles </h2>

<?php
	$unControleur->setTable ("sujet");

	require_once("vue/vueAdmin.php"); 

	if(isset($_POST["Valider"]))
	{
		$tab =array("theme"=>$_POST['theme'], 
				    "tittre"=>$_POST['tittre']
					 
				);
		$unControleur->insert ($tab); 
	}
	if(isset($_POST["envoie"]))
	{
		$tab =array("theme"=>$_POST['theme'], 
				    "tittre"=>$_POST['tittre']
					 
				);
		$unControleur->delete ($tab); 
	}

	 
 
?>