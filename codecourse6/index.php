<?php


require 'chest.php';
require 'lock.php';

$chest = new chest(new lock);
$chest->close();
$chest->open();











?>