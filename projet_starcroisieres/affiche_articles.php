<?php

try{
include('inc_config.php');
// affichage des articles de notre blog
$req=$db->query('SELECT id,titre,content,image FROM articles');
   
   // on affiche ici
	 while($donnees = $req->fetch()){
	  
	echo'<div class="ter">
	            <div><strong>title:'.$donnees['titre'].'</strong></div>
				<div><span class="dert"><img src="upload/'.$donnees['image'].'" alt="'.$donnees['image'].'"  width="150" height="100"/></span> <span class="irc">'.$donnees['content'].'</span></div>
				<div><a href="articles_page.php?page='.$donnees['id'].'">Blog de l\'article</a> </div>
				</div>';
		}
	 
	$req->closeCursor();
	   
}

catch(Exception $e)
  {
    die('Erreur : '.$e->getMessage());
}


?>