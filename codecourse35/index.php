<?php

ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);
require 'bird.php';
require 'pigeon.php';
require 'penguin.php';


$penguin = new Penguin(false, 2);


$penguin->foo()


 ?>
