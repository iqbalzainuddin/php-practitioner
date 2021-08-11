<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            header {
                background: #E3E3E3;
                padding: 2em;
                text-align: center;
            }
        </style>
    </head>
    <body>
        
        <header>
            <h1>
                <?= $greeting; ?>
            </h1>
        </header>

        <!-- 6-Array test code start here -->
        <ul>
            <!-- First option loop through array to print elements -->
            <!-- <?php
                // foreach ($names as $name) {
                //     echo "<li>$name</li>";
                // }
            ?> -->
            
            <!-- Second option to loop through array to print elements -->
            <!-- This option look cleaner -->
            <?php foreach ($names as $name) : ?>
                <li><?= $name; ?></li>
            <?php endforeach ?>
        </ul>
        <!-- 6-Array test code end here -->

    </body>
</html>