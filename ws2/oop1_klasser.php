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

class person
{

    public $firstname;
    public $lastname;
    public $age;

    function __construct($firstname, $lastname, $age)
    {

        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->age = $age;
    }

    function setAge($age)
    {
        $this->age = $age;
    }

    function getAge()
    {
        return $this->age;
    }
}

class subperson extends person
{
    public $mood;

    function __construct($firstname, $lastname, $age, $mood)
    {
        parent::__construct($firstname, $lastname, $age);
        $this->mood = $mood;
    }

}

$person1 = new subperson ("Simon ", "Turesson", 12, "glad");
echo "{$person1->firstname}{$person1->lastname},{$person1->getAge()}, is {$person1->mood}!\n";

$person2 = new person ("anna", "olsson", 21);
echo $person2->firstname;
echo $person2->lastname;
echo $person2->getAge();


?>