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
    


?>

<html>
<head>
    <title>Projet1TPDatabase</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Oswald|Playfair+Display" rel="stylesheet">
    <link rel ="stylesheet" type="text/css" href="core.css">
</head>
<body>
	<script src="date.js"></script>
    <nav>
		<div class="page-header">
			<h1 >Mon Blog</h1> 
        <div id="Username">
            
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
    <section>
        <article>
			<h2>Résumé</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur magna quam, hendrerit sodales volutpat consectetur, convallis ac tortor. Integer vel turpis nec orci semper vestibulum id a risus. Suspendisse potenti. Nulla rhoncus odio quis gravida imperdiet. Pellentesque non pellentesque nulla. Etiam sollicitudin tellus sem, nec ornare ligula malesuada ac. Mauris sed erat convallis, elementum eros eu, aliquet eros. Suspendisse potenti. Aliquam eu condimentum odio. Praesent hendrerit congue facilisis. Nullam justo nunc, porttitor vel ligula in, pulvinar blandit elit.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur magna quam, hendrerit sodales volutpat consectetur, convallis ac tortor. Integer vel turpis nec orci semper vestibulum id a risus. Suspendisse potenti. Nulla rhoncus odio quis gravida imperdiet. Pellentesque non pellentesque nulla. Etiam sollicitudin tellus sem, nec ornare ligula malesuada ac. Mauris sed erat convallis, elementum eros eu, aliquet eros. Suspendisse potenti. Aliquam eu condimentum odio. Praesent hendrerit congue facilisis. Nullam justo nunc, porttitor vel ligula in, pulvinar blandit elit.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur magna quam, hendrerit sodales volutpat consectetur, convallis ac tortor. Integer vel turpis nec orci semper vestibulum id a risus. Suspendisse potenti. Nulla rhoncus odio quis gravida imperdiet. Pellentesque non pellentesque nulla. Etiam sollicitudin tellus sem, nec ornare ligula malesuada ac. Mauris sed erat convallis, elementum eros eu, aliquet eros. Suspendisse potenti. Aliquam eu condimentum odio. Praesent hendrerit congue facilisis. Nullam justo nunc, porttitor vel ligula in, pulvinar blandit elit.</p>
        </article><br>
        <?php foreach($vArticles as $article): ?>
        <div class="article">
			<h2><a href="article.php"><?php echo '<li>'.$article['titre'].'</li><br/>';?></h2></a>
		<p>
           <?php $string = $article["contenu"]; print substr($string,0,255); ?>
        </p>
        <?php echo '<li>'.$article['date'].'</li><br/>';?>
        </div>
        <?php endforeach ?>
    </section>
    
</body>
</html>












<!--##password == string md5(string$str[, bool $raw_output = false])-->