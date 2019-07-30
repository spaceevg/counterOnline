<?php

require_once 'FileArray.php';

class Online
{

    protected $storage = null;

    public function __construct()
    {
        $this->storage = new FileArray();
    }

    public function getOnlineCount()
    {
        print_r('Hi!' . PHP_EOL);
    }
}
