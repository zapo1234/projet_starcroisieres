<?php

include('inc_config.php');
try{

$_SESSION['page']=$_GET['page'];
// affichage des commentaire
$date =date('y-m-d');
// on recupere la requete dans la base de données
$req=$db->prepare('SELECT id,commentaire FROM commentaire WHERE id= :id');
$req->execute(array(':id'=>$_GET['page']));

 // on affiche ici
	 while($donnees = $req->fetch()){
	  
	echo'<div class="ter">
	            <div><strong>avis:'.$donnees['commentaire'].'</strong></div>
				<div>Date publication.'.$date.'</div>
				</div>';
		}
	 
	$req->closeCursor();
	
}

catch(Exception $e)
 {
   die('Erreur : '.$e->getMessage());
 }
 	 



















?>