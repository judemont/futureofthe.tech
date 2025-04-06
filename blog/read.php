<?php

$i = $_GET['i'];
$data = file_get_contents('articles.json');
$articles = json_decode($data, true);
$article = $articles[$i];
$content = file_get_contents("articles/" . $article["html"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $article["title"] ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    echo $content;
    ?>
    <br><br>
    <h2>-----------------</h2>
    <footer>
        <p>Author: <a href="https://futureofthe.tech"></i><b>Julien de Montmollin (JdM)</b></i></a></p>
        <p>Published on: <i><b><?php echo $article["date"] ?></b></i></p>
        <p>License: <b><i>Public domain</i></b></p>
        <p><a href="index.php">Back to articles</a></p>
    </footer>
</body>
</html>
    