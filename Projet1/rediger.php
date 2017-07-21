<?php
    // require('config.php');
session_start();
// class DataBaseManager {
//     private $connection;
//     private $id;
//     private $schema;

//     public function __construct($str = "") {

//         $this->schema = $str;
//         $servername = "localhost";
//         $username = "root";
//         $password = "";
//         //Create connection
//         $conn -> connection = new mysqli($servername, $username, $password);
//         //Check connection
 
    include_once "DatabaseManager.php";
    $database = new DatabaseManager('blog');

        
// for($i = 0; $i<=10; ++$i)
//     {
//     $query= "INSERT INTO blog.utilisateur (id, nomdutilisateur, motdepasse,prenom,nom, role, biographie)
//     VALUES(null, '1', 'Titre2','contenu', '2017-02-28')";
//     $database->FetchDatabase($query);
//     }

    $vArticles =$database->FetchDatabase("SELECT * FROM blog.article");

    // foreach($vArticles as $article)
    // {
    //     $query = "UPDATE blog.article SET date = '2019-02-20' WHERE id ='" .$article['id']."'";
    //     $database->FetchDatabase($query);
    // }


    $vArticles = $database->FetchDatabase("SELECT * FROM blog.article");
    /*echo"<pre>";print_r($vArticles);die;*/



    $vUsersResults = $database->FetchDatabase("SELECT * FROM blog.utilisateur");
    $vUsers = [];
    foreach($vUsersResults as $user)
    {
        $vUsers[$user['id']] =
        [
            'username'=>$user['nomdutilisateur'],
        ];
    }      
    
    

if(isset($_POST['username']))
{
	echo($_POST['username']);
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
		<div class="create-contenu">
		<form action='' method='post'>
			<input type='hidden' name='id'>

			<p><h3>Titre</h3>
			<input type='text' name='titre'</p>

			<p><h3>Date</h3>
			<input type='text' name='date'</p>

			<p><h3>Contenu</h3>
    		<textarea name='contenu' cols='60' rows='10'></textarea></p>

			<p><input type='submit' name='submit' value='Créer'></p>
		
		</form>
		</div>
	</nav>
    </body>
</html>