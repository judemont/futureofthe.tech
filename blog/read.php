<?php
$data = file_get_contents('infos.json');
$data = json_decode($data, true);
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $data["name"] ?></title>
        <link rel="stylesheet" href="styles/style.css">
        <link rel="stylesheet" href="styles/read.css">

        <meta name="description" content="<?php echo $data["description"] ?>">
        <meta name="author" content="<?php echo $data["author"] ?>">
        
    </head>
    <body>
        
        <?php
        require 'Parsedown.php'; 

    

        $Parsedown = new Parsedown();

        $filename = isset($_GET['p']) ? $_GET['p'] : '';

        $sanitizedFilename = basename($filename);

        $markdownDirectory = 'articles/'; 

        $filePath = $markdownDirectory . $sanitizedFilename;

        if (file_exists($filePath) && pathinfo($filePath, PATHINFO_EXTENSION) === 'md') {

            $markdownContent = file_get_contents($filePath);
            

            preg_match('/\[info_title\]: (.+)/', $markdownContent, $titleMatch);
            preg_match('/\[info_description\]: (.+)/', $markdownContent, $descriptionMatch);
            preg_match('/\[info_date\]: (.+)/', $markdownContent, $dateMatch);

            $title = $titleMatch[1] ?? 'No title';
            $description = $descriptionMatch[1] ?? 'No description';
            $date = $dateMatch[1] ?? 'No date';




            $htmlContent = $Parsedown->text($markdownContent);

            echo $htmlContent;
        } else {
            echo "File not found or invalid file type.";
        }

        ?>

        <br><br>
        <h2>-----------------</h2>
        <footer>
            <p>Author: <a href="/"></i><b> <?php echo $data["author"] ?></b></i></a></p>
            <p>Published on: <i><b><?php echo $date ?></b></i></p>
            <p>License: <b><i><?php echo $data["license"] ?></i></b></p>
            <p><a href="index.php">Back to articles</a></p>
            <p><a href="/">Back to my website</a></p>

            <br><br>
            <script src="../scripts/giscus.js"
                data-repo="judemont/futureofthe.tech"
                data-repo-id="R_kgDOJg4fWQ"
                data-category="Announcements"
                data-category-id="DIC_kwDOJg4fWc4Cpus9"
                data-mapping="title"
                data-strict="0"
                data-reactions-enabled="1"
                data-emit-metadata="0"
                data-input-position="bottom"
                data-theme="dark"
                data-lang="en"
                crossorigin="anonymous"
                async>
            </script>
        </footer>

    </body>

</html>