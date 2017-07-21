<?php
$stmt = $database->prepare('SELECT id, titre, date FROM article WHERE id = :id');
$stmt->execute(array(':id' => $_GET['id']));
$row = $stmt->fetch();

if($row['id'] == ''){
    header('Location: ./');
    exit;
}

?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Mon blong - <?php echo $row['titre'];?></title>
    <link rel="stylesheet" href="style/normalize.css">
    <link rel="stylesheet" href="style/main.css">
</head>
<body>

    <div id="wrapper">

        <h1>Mon Blog</h1>
        <hr />
        <p><a href="./">Index de mon Blog</a></p>



        <?php
            echo '<div>';
                echo '<h1>'.$row['titre'].'</h1>';
                echo '<p>Posted on '.date('Y M jS HH:MM:SS', strtotime($row['date'])).'</p>';
            echo '</div>';
            ?>
    
    </div>


</body>
</html>