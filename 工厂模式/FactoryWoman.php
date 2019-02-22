<?php

require_once 'CreatePeople.php';
require_once 'Woman.php';

class FactoryWoman implements CreatePeople
{
    public function create()
    {
        // TODO: Implement create() method.

        return new Woman();
    }
}