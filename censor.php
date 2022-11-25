
<html>
    <body>

        <?php

        $text = $_GET["text"];
        $badWord = $_GET["badWord"];

        echo $text;
        echo strlen($text);

        $text = str_replace($badWord, "***", $text);

        echo "<h4>" . $text . "</h4>";

        ?>

    </body>
</html>