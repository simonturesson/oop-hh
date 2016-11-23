<?php

/**
 * Created by PhpStorm.
 * User: simonturesson
 * Date: 2016-11-18
 * Time: 16:05
 */
class chest
{
    protected $lock;
    protected $isClosed;

    public function __construct()
    {
        $this->lock = $lock;
    }


    public function close(Lock $lock)
    {


        if ($lock === true) {
            $this->lock->lock();

        }
        $this->isClosed = true;
        echo 'Closed';
    }

    public function open()
    {
        if ($this->lock->isLocked()) {
            $this->lock->unLocked();
        }
        $this->isClosed = false;
        echo 'Open';
    }

    public function IsClosed()
    {
        return $this->isClosed;
    }

}