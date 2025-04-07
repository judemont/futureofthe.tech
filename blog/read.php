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
    <meta name="description" content="<?php echo $article["description"] ?>">
    <meta name="author" content="Julien de Montmollin (JdM)">
    <meta name="keywords" content="JdM, Julien de Montmollin, blog, articles, futureofthe.tech, technology, innovation, development">
</head>
<body>
    <?php
    echo $content;
    ?>
    <br><br>
    <h2>-----------------</h2>
    <footer>
        <p>Author: <a href="/"></i><b>Julien de Montmollin (JdM)</b></i></a></p>
        <p>Published on: <i><b><?php echo $article["date"] ?></b></i></p>
        <p>License: <b><i>Public domain</i></b></p>
        <p><a href="index.php">Back to articles</a></p>
        <p><a href="/">Back to my website</a></p>

        <br><br>
        <h2 >Support My Work</h2>
        <div class="support">
            <h4>Bitcoin :</h4>
            <p>bc1qhmkpytvs42w27pgqrk7kljy5hvarzx6tll8ar6</p>
            <h4>Monero :</h4>
            <p>49pyL3WPqfqfaLweCYFYbsWQi2bvKqmAHixewxnDBi32DKiPQz9kgJ5g6VnvENLqWbD5iGasQQvG7GVVg6B3HYu5Gqx4JSn</p>
        </div>
    </footer>
</body>
</html>
    