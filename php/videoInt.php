<?php

//Gibt Klassen vor welche funktionen sie verwenden dürfen

interface videoInt {

    public function getName() : string;

    public function getSource() : string;

    public function getHTML() : string;

}