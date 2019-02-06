<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

class Vampire extends Monster{
    private static $_victims=0;
    function __construct($name="?")
    {
        parent::__construct($name);



    }
    function attack()
    {
        echo "<p>" . $this->name . "is being attacking</p>";
        self::$_victims++;
    }
    function getVictims()
    {
        return $this->_victims;
    }
}
