<?php

namespace CounterOnline;

class Storage implements InterfaceStorage
{

    private $settings;

    private $emptyString = "";

    private $storageFile = null;
    private $emptyStringFile = null;

    public function __construct(StorageSettings $settings)
    {
        $this->settings = $settings;
        $this->setEmptyString();
    }

    public function get($id = null):Record
    {
        return new Record();
    }

    public function set(Record $record)
    {
        //
    }

    public function getCount()
    {
        //
    }

    public function clear()
    {
        //
    }

    private function setEmptyString()
    {
        $string = '';
        for ($i = 0; $i < $this->settings->strlenStorageFile; $i++) {
            $string .= '.';
        }
        $this->emptyString = $string;
    }
}
