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
</head>
<body>
    <?php
    echo $content;
    ?>
</body>
</html>
    