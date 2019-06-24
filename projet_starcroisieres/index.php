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
                <a href="liste_articles.php">Liste des articles</a>
                </nav>

            <section id="section1" class="onglet-content open">
			<div class="section1">
			<h1> Starcroisières mini Blog article</h1>
			 <h2>Création d'un article de notre blog</h2>
			
			<form method="post" id="form1class" action="index.php" enctype="multipart/form-data" >
			 <div class="form1">
			 <div class="input1">
			 <input type="text" name="title" id="title" placeholder="Titre de l'article" required/>
			 </div><!-- input1--->
			 <div class="input1">
			 <input type="text" name="content" id="content" placeholder="text content" required/>
			 </div><!-- input1--->
			 <div class="input3">
			 <input type="file" name="fls" required/>
			 </div><!-- input4--->
			
			 <div class="input5">
			 <input type="submit" name="create" id="envoyer" value="ajouter un article"  required/>
			 </div><!-- input5--->
			 
			 </form>
			 <!-- traitement du formulaire dans notre base de données-->
			 <?php include('creer_articles.php');?>
			 <div id="data"></div>
			 </div><!--form1-->
			
			</section>
		
		<?php include('inc_foot_scriptjs.php');?>
	</body>
</html>
