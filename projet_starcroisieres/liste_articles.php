<?php
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
                </nav>

            <section id="section1" class="onglet-content open">
			<div class="section1">
			<h1>Listes des articles du Blog</h1>
			 <!-- Affichage des articles de notre blog-->
			 <?php include('affiche_articles.php');?>
			 </div><!--form1-->
			
			</section>
		
		<?php include('inc_foot_scriptjs.php');?>
	</body>
</html>
