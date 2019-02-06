<?php

class Monster
{
    private $_name;

    function __construct($name = 'unknown')
    {
        $this->_name = $name;
    }

    function setName($name)
    {
        $this->_name = $name;
    }

    function getName()
    {
        return $this->_name;
    }

    function attack()
    {
        echo "<p>" . $this->_name . "is attacking</p>";
    }

}