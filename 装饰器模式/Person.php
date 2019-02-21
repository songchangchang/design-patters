<?php
/**
 * Created by PhpStorm.
 * User: songchangchang1296
 * Date: 2019/2/21
 */
class Person {

    private $name;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function show()
    {
        echo "经过装扮的" . $this->name . "\n";
    }
}