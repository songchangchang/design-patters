<?php

require_once  'People.php';

class Man implements People
{
    public function say()
    {
        echo '我是男人';
    }
}