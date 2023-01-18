<!DOCTYPE html>
<html>
    <head>
        <title>Viewpage</title>
        <link rel="stylesheet" href="stylesheet.css">
    </head>
    <body>
        <h1>DBA's Trailer Site</h1>
        <article>
            <?php

            require "php/video.php";

            $ytSrc = "https://www.youtube.com/embed/dQw4w9WgXcQ";
            $ytTitle = "Rick Astley - Never Gonna Give You Up (Official Music Video)";

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

            $vmSrc = "https://player.vimeo.com/video/761135822?h=a2ab882567&color=8f090d&title=0&byline=0&portrait=0&badge=0";
            $vmTitle = "ARTofGRIND";

            $vm = new Vimeo($vmSrc, $vmTitle);

            for ($i = 0; $i < 5; $i++) {
                echo "<section>";
                echo "<p>" . $vm->getHTML() . "</p>";
                echo "</section>";
            }
            ?>
        </article>
    </body>
</html>