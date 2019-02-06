<?php

class Monster{
    private $_name;
    private $_color;

    //default constructor
//    function __constructor(){
//        $this->_name="unknown";
//        $this->_color="?";
//}

    function __construct($name='unknown',$color='?'){
        $this->_name=$name;
        $this->_color=$color;
    }




    function eat(){
        echo "<p>".$this->_name."is eating</p>";
    }

    function talk(){
        echo "<p>".$this->_name."is talking</p>";
    }

    function sleep(){
        echo "<p>".$this->_name."is sleeping</p>";
    }


    function getName(){
        return $this->_name;
    }

    function setName($name){
        $this->_name=$name;
    }

    function getColor(){
        return $this->_color;
    }

    function setColor($color){
        $this->_color=$color;
    }
}