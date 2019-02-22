<?php

require_once 'SplSubject.php';

interface SplObserver
{
    public function update(SplSubject $subject);
}