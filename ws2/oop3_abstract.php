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


abstract Class signal
{
    public $int = 45;

    abstract function Phone();
}

class signals extends signal
{
    function Phone()
    {

    }
}

?>