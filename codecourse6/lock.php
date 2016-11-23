<?php
/**
 * Created by PhpStorm.
 * User: simonturesson
 * Date: 2016-11-18
 * Time: 16:05
 */

class lock
{
    protected $isLocked;

    public function lock (){
    $this->isLocked = true;
    }

    public function isLocked(){
        return $this->isLocked;
    }

}