<!DOCTYPE html>
<html>
    <head>
        <title>Viewpage</title>
        <link rel="stylesheet" href="stylesheet.css">
    </head>
    <body>
        <h1>Video Collection</h1>
        <article>
            <?php

            require "php/video.php";

            $ytSrc = "https://www.youtube.com/watch?v=_Ko05tWabzo";
            $ytTitle = "THE ORAL CIGARETTES";

            $yt = new YouTube($ytSrc, $ytTitle);

            for ($i = 0; $i < 5; $i++) {
                echo "<section>";
                echo "<p>" . $yt->getHTML() . "</p>";
                echo "<figcaption>";
                echo "Title: " . $yt->getName() . "<br>" . "Source: " . $yt->getSource();
                echo "</figcaption>";
                echo "</section>";
            }

            echo "<br>";

            $vmSrc = "https://vimeo.com/236357509";
            $vmTitle = "Random Loops of 2017";

            $vm = new Vimeo($vmSrc, $vmTitle); //var mit src und title

            for ($i = 0; $i < 5; $i++) {
                echo "<section>";
                echo "<p>" . $vm->getHTML() . "</p>";
                echo "</section>";
            }
            ?>
        </article>
    </body>
</html>