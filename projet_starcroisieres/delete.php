<?php
include('inc_config.php');
try{

$_SESSION['page']=$_GET['page'];
$date=date('Y-m-d');
// on suppression des données dans la base de données
     $rec=$db->prepare('DELETE FROM articles WHERE id = :id');
		$rec->execute(array(':id'=>$_GET['page']));
	// supression de la table des commentaire
	$reg=$db->prepare('DELETE FROM commentaire WHERE id = :id');
		$reg->execute(array(':id'=>$_GET['page']));
	echo'ce article à été supprimé';
// on creer une redirection
 
}


catch(Exception $e)
 {
   die('Erreur : '.$e->getMessage());
 }
 ?>