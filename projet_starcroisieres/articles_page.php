<?php
   include('inc_config.php');
    $page = "home";
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
	<?php include("inc_entete.php"); ?>
 <title>Blog d' article starcroisieres </title>
 <meta name="description" content="creation_blog,creation commentaire,starcroisieres" />
	</head>
	<body class="home">
		<?php include('inc_header.php');?>
		<div class="main-content wrap">
              <nav class="nav-onglets">
                <a href="index.php">Ajouter un article</a>
				<a class="button">Delete blog</a>
				<span id="dats"></span>
                </nav>

            <section id="section1" class="onglet-content open">
			<div class="section1">
			<h1>Blog individuel d'articles</h1>
			 <!-- Affichage des articles de notre blog-->
			 <?php include('article_individual.php');?>
			 <form method="get" id="forms" action="">
			 <h2>Laisser un commentaire</h2>
			 <textarea name="coments" id="coments" width="400" height="80" required>
			 
			 </textarea>
			 <div><input type="button" id="envoi" value="envoyer"/>
			 </form>
			 <div id="data"></div>
			 
			 </div>
			 </div><!--form1-->
			
			</section>
		
		<?php include('inc_foot_scriptjs.php');?>
	</body>
</html>