<?php

$data = file_get_contents('articles.json');
$articles = json_decode($data, true);
$articles = array_reverse($articles);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JdM's Blog</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>JdM's Blog</h1>
        <b><i>My ideas and thoughts</i></b>

    </header>
    <h3 >Articles :</h3>
    <ul>
        <?php
            $i = 0;
            foreach ($articles as $article) {
                echo "
                <li>
                    <a href=\"read.php?i=$i\"><b>{$article['title']}</b></a> <br>
                    <i>{$article['date']}</i> <br>
                    <b>{$article['readTime']}</b>
                </li>";
                $i++;
            }
        ?>
    </ul>
    
</body>
</html>