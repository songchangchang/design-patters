<?php

require_once 'CreatePeople.php';
require_once 'Man.php';

class FactoryMan implements CreatePeople
{
    public function create()
    {
        // TODO: Implement create() method.

        return new Man();
    }
}