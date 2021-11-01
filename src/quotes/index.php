<html>
    <head>
        <style>
            body {
                background-color: black;
            }

            h1 {
                color: white;
                font-family: Arial;
            }
        </style>
        <title>All Logkiller Quotes</title>
    </head>
    <body>
        <?php
            $images = glob('*.{png,gif,jpg,jpeg}', GLOB_BRACE);
            foreach ($images as $image) {
                $name = basename($image);
                echo "<h1>".$name."</h1>";
                echo "<img src=\"" . $name . "\">";
                echo "<hr>";
            }
        ?>
    </body>
</html>