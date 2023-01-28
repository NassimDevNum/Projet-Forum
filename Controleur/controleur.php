<?php
	//appel du model
	require ("modele/modele.php");
	class Controleur
	{
		public function connexion($login, $mdp)
		{
		  $unModel = new Model();
			if($login != "" && $mdp != "") {
                $count = $unModel->connexion($login, $mdp);
                if ($count == 1)
                {
                    header('Location:user_profil.php');
                 }
                 else {
                    return $count;
                 }
			}
			else
				echo "Veuillez renseigner votre nom utilisateur et votre mot de passe";
		}

       
        public function Inscription($login,$email,$mdp){
            $unModel = new Model();
               $reponse = $unModel->Inscription($login,$email,$mdp);
                if ($reponse)
                    header('Location: user_profil.php');
        }

         public function fetch_post(){
            $unModel = new Model();
            $tab = $unModel->fetch_post();
            return $tab;
        }
         public function delate_comment($id){
         	$unModel = new Model();
            $reponse = $unModel->delate_comment($id);
            if ($reponse)
                    header('Location: index.php');

         }
       public function add_Comment($id_s,$id_user,$contenue)
       {
       	 $unModel = new Model();
               $reponse = $unModel->add_Comment($id_s,$id_user,$contenue);
                if ($reponse)
                    header('Location: index.php');
       }
       public function selectAllComment(){
            $unModel = new Model();
            $tab = $unModel->selectAllComment();
            return $tab;
        }
        public function insert ($tab)
		{
            $unModele = new Model();

			    $unModele->insert($tab);
		}
    }

		