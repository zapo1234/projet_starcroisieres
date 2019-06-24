<?php
try{

if(isset($_GET['page'])) {
// on rengistre comme variable de session
$_SESSION['page']=$_GET['page'];
	
// on se connecte a la base
	  $req=$db->prepare('SELECT id,titre,image,content FROM articles WHERE id= :id');
      $req->execute(array(':id'=>$_GET['page']));
	  $donnees=$req->fetch();
	  $req->closeCursor();
	
echo'<div class="h1">Titre de l\'article:'.$donnees['titre'].'</div>
      <div class="dt"><img src="upload/'.$donnees['image'].'" alt="'.$donnees['image'].'" width="120" height="80"/></div>';
	
}

}
catch(Execption $e)
  {
die('Erreur : '.$e->getMessage());
} 


?>