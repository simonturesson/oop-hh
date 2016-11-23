<?php
/**
 * Created by PhpStorm.
 * User: simonturesson
 * Date: 2016-11-23
 * Time: 07:52
 *
 *
 * */

namespace app;


ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);


require_once('app/library.php');

$class = new MyClass();
echo $class->libprop;
?>


