<?php

class FileArray implements ArrayAccess
{

    private $storageFileName = '';
    private $emptyStringFileName = '';

    private $emptyString = "";

    private $strlenStorageFile = 0;
    private $strlenEmptyString = 0;

    private $newStringByte = 1;

    private $storageFile = null;
    private $emptyStringFile = null;

    public function __construct(
        string $storageFileName = 'storage',
        string $emptyStringFileName = 'storage_empty',
        int $strlenStorageFile = 10,
        int $strlenEmptyString = 10,
        int $newStringByte = 1)
    {
        $this->storageFileName = $storageFileName;
        $this->emptyStringFileName = $emptyStringFileName;
        $this->strlenStorageFile = $strlenStorageFile;
        $this->strlenEmptyString = $strlenEmptyString;
        $this->newStringByte = $newStringByte;
        $this->setEmptyString();
        $this->openFiles();
        print_r($this);
    }

    public function offsetSet($offset, $value)
    {

    }

    public function offsetExists($offset)
    {

    }

    public function offsetUnset($offset)
    {

    }

    public function offsetGet($offset)
    {

    }



    private function setEmptyString()
    {
        $string = '';
        for ($i = 0; $i < $this->strlenStorageFile; $i++) {
            $string .= '.';
        }
        $this->emptyString = $string;
    }

    private function openFiles()
    {

    }

    private function closeFiles()
    {

    }

}
