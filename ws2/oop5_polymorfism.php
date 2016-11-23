<?php
/**
 * Created by PhpStorm.
 * User: simonturesson
 * Date: 2016-11-14
 * Time: 08:04
 */


ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);

header('Content-type:text/plain; charset = UTF-8');


Class Call
{
    function Nokia()
    {
        echo 'Never Break';
    }
}

class A extends Call
{
    function Nokia()
    {
        echo 'You are wrong!';
    }
}

class B extends Call
{
    function Nokia()
    {
        echo 'Samsung!';
    }
}

$call_array = array();
$call_array[0] = new A();
$call_array[1] = new B();

foreach ($call_array as $call) {
    echo $call->Nokia();
}

class jump
{
    function high(Call $call)
    {
        echo $call->Nokia();
    }
}

$jump = new jump();
$jump->high($call_array[0]);

?>