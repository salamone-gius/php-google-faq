<?php
    require_once __DIR__ . '/server/database.php';
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style/style.css">
        <title>Google Faq</title>
    </head>
    <body>
        <main>
            <div class="container">
                <?php foreach ($database as $post) { ?>
                    <div class="question-box">
                        <?php echo $post["question"]; ?>
                    </div>
                    <div class="answer-box">
                        <?php echo $post["answer"]; ?>
                    </div>
                <?php } ?>
            </div>
        </main>      
    </body>
</html>