 <?php
 

function create($author,$title,$content,$image){
    $pdo =getPDO();
    $query = $pdo->prepare('INSERT INTO sujet( tittre,image,date_ajout) VALUES( :tittre,:image,NOW())');
    $query->execute(compact( 'tittre', 'image'));
    $id = $query->insert_id;
    return $id;
}
function selectAll($page,$perPage){
    $perPage = $perPage;
    $page =  $page;
    $bdd =getPDO();
    $resultats = $bdd->query('SELECT * FROM sujet ORDER BY  date_ajout DESC LIMIT '.($perPage *($page-1)).','. $perPage );
    $posts = $resultats->fetchAll();
    return $posts;
} 
function pagination(){
    $pdo =getPDO();
    $query = $pdo->query("SELECT COUNT(*) as nbr_articles FROM sujet");
        $nombres= $query->fetch();
    return $nombres['nbr_articles'];
    
}
function selectOne($id){
    $pdo =getPDO();
    $query = $pdo->prepare('SELECT * FROM sujet WHERE id = :post_id');
    $query->execute(['post_id' => $id]);

    $post = $query->fetch();
    return $post;
}
function findAllComments($id_s){
    $pdo =getPDO();
    $query = $pdo->prepare('SELECT * FROM commentaire
      WHERE id = :id_s');
    $query->execute(['id_s' => $id_s]);

    $comments = $query->fetchAll();
    return $comments;
}

function findComment($id){
    $pdo =getPDO();
    $query = $pdo->prepare('SELECT * FROM commentaire
     WHERE id = :id');
    $query->execute(['id'=> $id]); 
    $comment =$query->fetch();
    return $comment;
}

function deletePost($id){
    $pdo =getPDO();
    $query = $pdo->prepare('DELETE FROM sujet WHERE id = :id');
    $query->execute(['id'=> $id]); 
}
function updatePost($id,$author,$title,$content,$image){
    $pdo =getPDO();
    $query = $pdo->prepare('UPDATE sujet SET  user = :author, title = :tittre,content = :content,image = :image WHERE id =:id'); 
    $query->execute(compact('user','tittre','content','image','id'));
    $id = $stmt->insert_id;
    return $id;
}


function deleteComment($id){
    $pdo =getPDO();
    $query = $pdo->prepare('DELETE FROM commentaire
      WHERE id_c= :id');
    $query->execute(['id'=> $id]); 
}

function saveComment($author,$post_id,$comment){
    $pdo =getPDO();
    $query = $pdo->prepare('INSERT INTO commentaire
     (id,id_user,contenue,date_c) VALUES(:post_id,:author,:comment ,NOW()');
     
    return $query;
}
?>