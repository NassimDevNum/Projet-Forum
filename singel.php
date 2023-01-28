<?php  
require ("controleur/controleur.php");
?>
<?php 
  $id_comment = $tab_tmp['id_c'];
  $cont = new Controleur();
  $cont->delate_comment($id);
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Custom Styling -->
  

  <title>Article </title>
</head>

<body>

 
    <?php require ("header.php");?>
 
  <!-- Page Wrapper -->
  <div class="page-container">

    <!-- Content -->
    <div class="container">

      <!-- Main Content Wrapper -->
      <div class="">
        <div class="main-content single">
          <h1 class="post-title"><?php echo $tab_tmp['tittre']; ?></h1>
          <div class="post-image">
              <img src="<?php echo 'images/' . $post['image']; ?>" alt="" >
          </div>
          
        <h1>Les commentaires</h1>
        <div class="comments">
          <?php foreach ($comments as $comment): ?>
          
            <div class="comment">
             
              <p class="contenu" ><?php echo $comment['contenue']; ?><br>
              <i class="far fa-calendar"> <?php echo date('d F, Y', strtotime($comment['date_c'])); ?></i>
              < //? php  if( isset $_SESSION["login"] == $comment["u.login"])
              <a class="sup" href="single.php?id=<?php echo $id ?>&amp;id_comment_delete=<?php echo $comment['id_c']; ?>">Supprimer</a>
              </p>
              <br>
            </div>
          <?php endforeach; ?>
        </div>
        <br>
        <form action="single.php"  method="post">
          <input type="hidden" name="id" value="<?php echo $id ?>">
          
            
          <div>
            
            <textarea name="comment" id="body" cols="130" rows="15"></textarea>
          </div><br>
          <div>
              <button type="submit" name="add-comment" class="btn btn-big">Commentez</button>
          </div>
        </form>
        
      </div>
    </div>
  </div>
   

     

  <!-- footer -->
  <?php require_once "footer.php"; ?>
  <!-- // footer -->

</body>

</html>