<?php
    require_once __DIR__ . '/server/database.php';
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/style.css">
        <title>Google Faq</title>
    </head>
    <body>
        <main>
            <div class="container">
                <?php foreach ($database as $post) { ?>
                    <?php echo $post["question"]; ?>
                    <?php echo $post["answer"]; ?>
                <?php } ?>
            </div>
        </main>      
    </body>
</html>