<?php

$data = file_get_contents('articles.json');
$articles = json_decode($data, true);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JdM's Blog</title>
</head>
<body>
    <header>
        <h1>JdM's Blog</h1>
        <h2><i>My ideas and thoughts</i></h2>
        <br><br>
        <h3>Articles</h3>
        <ul>
            <?php
                $i = 0;
                foreach ($articles as $article) {
                    echo "<li><a href=\"read.php?i=$i\">{$article['title']}</a></li>";
                    $i++;
                }
            ?>
    </header>
    
</body>
</html>