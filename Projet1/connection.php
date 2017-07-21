<?php

include_once "DatabaseManager.php";
$database = new DatabaseManager('blog');
$vUsersResults = $database->FetchDatabase("SELECT * FROM blog.utilisateur");
$vArticles = $database->FetchDatabase("SELECT * FROM blog.article");

// // if(md5($)== $dbPassword){
// // getConnected();}

if(isset($_POST['username']))
{
	echo($_POST['username']);
	session_start();
}





?>
<html>
<head>
	
    <title>Projet1TPDatabase</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Oswald|Playfair+Display" rel="stylesheet">
    <link rel ="stylesheet" type="text/css" href="core.css">
	<link rel ="">
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
	</nav>
	<article>
			<h2>Connectez-vous ici</h2>
		<div id="connexion">
			<ul>
			<form action="profil.php" method="post">
				<input type='hidden' name='id'>
                <li name="username">Username: <input type= "text" placeholder = "Username" id="Login-box" ></input></li><br/>
                <li name="password">Password: <input type= "text" placeholder = "Password" id="Password-box" ></input> </li>
				<input type="submit" name="Log In">
			</form>



            </ul>
		</div>
	</article>
    </body>
</html>