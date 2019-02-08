<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

    //Include the class definition
    require('Monster.php');
    require('Vampire.php');
    require('zombie.php');


    $monster1=new Monster("Wu");


    print_r($monster1);


    $monster1->setName("Guangpeng");
    $monster1->getName();
    $monster1->attack();

    $vampire1=new Vampire("Li");

    $vampire1->attack();
    $vampire1->getVictims();

$vampire2=new Vampire("Wang");

$vampire2->attack();
$vampire2->getVictims();

	$zombie1 = new zombie("Bob", 5);
	$zombie1->attack();
	$zombie1->getSpeed();
