<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

class Vampire extends Monster
{
    function fetch()
    {
        echo "<p>".$this->getName()." is fetching.</p>";
    }
}
