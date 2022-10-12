<?php
require './Video.php';
class YTVideo extends Video
{

    function htmlsourcecode()
    {
        return '<iframe width="280" height="150" src= title="Top 10 Best Horror Movies 2021" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
    }
}