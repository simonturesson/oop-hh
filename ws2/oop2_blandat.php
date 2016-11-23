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


define('MIN_VALUE', '0.0');
define('MAX_VALUE', '0.1');

class Call
{
    const MIN_VALUE = 0.0;
    const MAX_VALUE = 1.0;

    public static $antenna = 'Buzzzz....   Searching..';

    static function voice()
    {
        echo self::$antenna;
        echo 'Searching more...';
    }

    function checkNr($x)
    {
        try {
            if ($x > 1) {
                throw new Exception('Ska vara 1 eller mindre');
            }
        } catch (Exception $e) {
            echo 'Message: ' . $e->getMessage();
        }
        return true;
    }
}

echo Call::$antenna;
Call::voice();

$signal = new Call();
$signal->checkNr(3);

?>