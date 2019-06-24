<?php
include('inc_config.php');
try{

if(!empty($_GET['coments']) && $_GET['action']="envoi")
	{
$_SESSION['page']=$_GET['page'];
$date=date('Y-m-d');
// on insert les données dans la base de commentaire
$rec=$db->prepare('INSERT INTO commentaire (id,commentaire,date) VALUES(:id,:commentaire,:date)');
		$rec->execute(array(':id'=>$_GET['page'],
		                    ':commentaire'=>$_GET['coments'],
		                      ':date'=>$date));
	
}

}
catch(Exception $e)
 {
   die('Erreur : '.$e->getMessage());
 }
 	   
?>







