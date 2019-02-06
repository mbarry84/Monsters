<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

class Dog extends Pet{
    function fetch(){
        echo "<p>".$this->getName()." is fetching.</p>";
    }
}
