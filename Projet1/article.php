<?php

include_once "DatabaseManager.php";
$database = new DatabaseManager('blog');
$vArticles =$database->FetchDatabase("SELECT * FROM blog.article");
foreach($vArticles as $article)
     {
         $query = "UPDATE blog.article SET date = 'YYYY-MM-DD-HH-II-SS' WHERE id ='" .$article['id']."'";
         $database->FetchDatabase($query);
     }




?>
<html>
<head>
    <title>Projet1TPDatabase</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Oswald|Playfair+Display" rel="stylesheet">
    <link rel ="stylesheet" type="text/css" href="core.css">
</head>
<body>
    <nav>
		<div class="page-header">
			<h1>Mon Blog</h1> 
        <ul>
			<li><a href="index.php">Page d'accueil</a></li>
            <li><a href="article.php">Les articles</a></li>
			<li><a href="connection.php">Se connecter</a></li>
			<li><a href="profil.php">Ton profil</a></li>
			<li><a href="administration.php">Gérer vos articles</a></li>
			<li><a href="rediger.php">Produire un article</a></li>
            <form action="logout.php">
			<input type="submit" name="Log Out">
			</form>
        </ul>
		</div>
        <div id="articles">
        <?php foreach($vArticles as $article): ?>
        <div class="article">
            <h1><a href="article.php"><?php echo '<li>'.$article['titre'].'</li><br/>';?></a></h1>
		<p>
           <?php echo '<li>'.$article['contenu'].'</li><br/>';?>
        </p>
        <?php echo '<li>'.$article['date'].'</li><br/>';?>
        </div>
        <?php endforeach ?>
	</nav>
</body>
</html>