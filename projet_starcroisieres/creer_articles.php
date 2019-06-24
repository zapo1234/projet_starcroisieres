<?php

try{

include('inc_config.php');

if(isset($_POST['create'])) {

// on travail sur ajout en bdd de l'article
 
$infosfichier=pathinfo($_FILES['fls']['name']);
  $extension_upload= strtolower($infosfichier['extension']);
   $extension_autorises=array('jpg','png','jpeg','gif');	
   $taill_max=1000000;
   
  // des restriction sur les entrées utilisateurs
  $title = htmlentities(trim($_POST['title']));
  $content =  htmlentities(trim($_POST['content']));
  
  if(strlen($title)> 20) {
	  echo'le titre est plus long';
  }
  
  elseif(strlen($content)>100) {
	 echo'la description trop long'; 
}

elseif($_FILES['fls']['size'] > $taill_max)
   
   {
    echo'<span class="zarre">fichier trop gros</span>';
	}
	
	elseif(!in_array($extension_upload,$extension_autorises))
  {
   echo' <span class="zarre">extensions pas autorisée du fichier</span>';
   }
	

else
	{
	 // on se connecte a la base
	  $req=$db->prepare('INSERT INTO articles(titre,content,image) VALUES(:titre,:content,:image)');
      $req->execute(array(':titre'=>$title,
                     ':content'=>$content,
					 ':image'=>$_FILES['fls']['name']
					 ));
 // on recupere le fichier avec la fonction move upload
 move_uploaded_file($_FILES['fls']['tmp_name'], 'upload/'.
  basename ($_FILES['fls']['name']));
  
  echo'un article crée';

 }
}
}
 catch(Exception $e)
  {
    die('Erreur : '.$e->getMessage());
}
?>