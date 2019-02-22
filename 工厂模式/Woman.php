<?php

require_once 'Woman.php';

class Woman implements People
{
    public function say()
    {
        echo '我是女人';
    }
}