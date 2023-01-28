<?php
session_start();
class Model
{
    private $pdo;
    private function connexion_bdd()
    {
        $this->pdo=null;
        try{
            //PDO est une classe qui permet de se connecter à mysql et donc à la base qu'on veut
            
           
            $username = 'root';
            $password = '';
            $dbname = "blog";
            $servername = "localhost";
            
            $this->pdo = new PDO("mysql:host=".$servername, $username, $password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->exec("USE " . $dbname);
        }
        catch (exception $exp) {
            echo "Erreur de connexion à la BDD";
        }
    }

    public function connexion($login, $mdp)
    {
        $this->connexion_bdd();
        if ($this->pdo != null)
        {
            $requete = "SELECT * from user where login=:username and mdp =:password";
            $donnees= array(":username" =>$login, ":password" =>$mdp);
            $sql = $this->pdo->prepare($requete);
            $sql->execute($donnees);
            $results = $sql->fetch();
            if ($sql->rowCount() <= 0)
            {
                return 0;
            }
            else{
                $_SESSION["id_user"] = $results['id_user'];
                $_SESSION["login"] = $results['login'];
                $_SESSION["email"] = $results['email'];
                 $_SESSION["date_inscrip"] = $results['email'];

                
                return 1;
            }
        }
        else{
            return null;
        }
    }
    public function Inscription($login,$email,$mdp)
    {
        $this->connexion_bdd();
        if ($this->pdo != null)
        {
          
            $requete = "INSERT INTO user (login, mail, mdp,date_inscrip,lvl) VALUES('$login', '$email','$mdp',NOW(),1)";
            $sql = $this->pdo->prepare($requete);
            $sql->execute();

            $_SESSION["login"] = $login;
            $_SESSION["id_user"] = $id;
            $_SESSION["connect"] = true;
            

        }
        else{
            return null;
        }
    }

     public function fetch_post()
    {
        $this->connexion_bdd();
        if ($this->pdo != null)
        {
            $requete = "select * from sujet ";
            $sql = $this->pdo->prepare($requete);
            $sql->execute();
            $results = $sql->fetchAll();
            return $results;
        }
        else{
            return null;
        }
    }
     public function selectAllComment($id)
    {
        $this->connexion_bdd();
        if ($this->pdo != null)
        {
            


            $requete = "select c.id_c,c.date_c, c.contenue,u.login, c.id_s ".
            "from commentaire c".
                "left join user u on u.id_user = c.id_user ";
            $sql = $this->pdo->prepare($requete);
            $sql->execute();
            $results = $sql->fetchAll();
            return $results;
        }
        else{
            return null;
        }
    }
public function add_Comment($id_s,$id_user,$contenue){
        $this->connexion_bdd();
        if ($this->pdo != null)
        {
            $requete = "INSERT INTO commentaire (date_c, contenue, id_s,id_user) VALUES(now(), '".htmlentities($contenue['content']). "','$id_s','$id_user')";
            $sql = $this->pdo->prepare($requete);
            $sql->execute();
        }
}
    public function delate_comment($id){

        $this->connexion_bdd();
        if ($this->pdo != null)
        {
            $requete = "delate from commentaire where id = $id";
            $sql = $this->pdo->prepare($requete);
            $sql->execute();
            
   
        }
        
    }
    public function insert ($tab)
    {
        $donnees=array(); 
        $champs= array(); 
        foreach ($tab as $cle => $valeur) {
            $champs [] = ":".$cle ;
            $donnees[":".$cle] = $valeur;
        }
        $chaineChamps = implode (",",$champs); 

        $requete ="insert into ".$this->uneTable." values(null,".$chaineChamps.");";  
        $insert = $this->unPdo->prepare ($requete); 
        $insert->execute ($donnees); 
    }
    public function delete ($where)
		{
			$donnees=array(); 
			$champs= array();
			foreach ($where as $cle => $valeur) {
				$champs [] = $cle." =:".$cle ;
				$donnees[":".$cle] = $valeur;
			}
			$chaineWhere = implode (" and  ",$champs); 
			$requete ="delete from ".$this->uneTable."  where ".$chaineWhere;   
			$delete = $this->unPdo->prepare ($requete); 
			$delete->execute ($donnees);
		}


}