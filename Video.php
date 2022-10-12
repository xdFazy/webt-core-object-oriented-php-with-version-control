<?php
require './IVideo.php';

abstract class Video implements IVideo
{
    /**
     * @param $proptitle
     */
    public function __construct($proptitle, $propurl)
    {
        $this->proptitle = $proptitle;
        $this->url = $propurl;
    }

    function title(){
        return $this->proptitle;
    }
    private $proptitle;

    private $url;

    /**
     * @return mixed
     */
    public function geturl()
    {
        return $this->propurl;
    }


}