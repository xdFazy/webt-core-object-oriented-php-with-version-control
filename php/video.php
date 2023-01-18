<?php

require "videoInt.php";

abstract class video implements videoInt
{

    protected string $src;
    protected string $title;

    public function __construct($src, $title) {
        $this->src = $src;
        $this->title = $title;
    }

    public function getName() : string
    {
        return $this->title;
    }

    public function getSource() : string
    {
        return $this->src;
    }
}

class YouTube extends video
{

    public function __construct($src, $title)
    {
        parent::__construct($src, $title);
    }

    public function getHTML(): string
    {
        return "<iframe width=\"400\" height=\"250\" src=\"" . $this->src . "\" title=\"" . $this->title . "\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>";
    }
}
    /*
    <iframe width="400" height="250" src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Rick Astley - Never Gonna Give You Up (Official Music Video)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
     */

class Vimeo extends video
{

    public function __construct($src, $title)
    {
        parent::__construct($src, $title);
    }

    public function getHTML(): string
    {
        return "<iframe src=\"https://player.vimeo.com/video/761135822?h=a2ab882567&color=8f090d&title=0&byline=0&portrait=0&badge=0\" width=\"400\"  frameborder=\"0\" allow=\"autoplay; fullscreen; picture-in-picture\" allowfullscreen></iframe><p><a href=\"https://vimeo.com/761135822\">ARTofGRIND</a></p>";
    }
}