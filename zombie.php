<?php

	ini_set('display_errors', 1);
	error_reporting(E_ALL);

	class zombie extends Monster
	{
		private static $_speed=0;

		function __construct($name="?", $speed)
		{
			parent::__construct($name);
			self::$_speed = $speed;
		}

		function attack()
		{
			echo "<p>" . parent::getName() . " is biting. Watch out for the T-virus!</p>";
		}

		function getSpeed()
		{
			echo "<p>This zombie has a speed of " .self::$_speed."</p>";
		}
	}
