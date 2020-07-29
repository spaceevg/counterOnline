<?php

namespace CounterOnline;

class StorageSettings
{
    private $storageFileName;
    private $emptyStringFileName;
    private $strlenStorageFile;
    private $strlenEmptyString;
    private $newStringByte;

    public function __construct(
        string $storageFileName = 'storage',
        string $emptyStringFileName = 'storage_empty',
        int $strlenStorageFile = 23,
        int $strlenEmptyString = 23,
        int $newStringByte = 1
    ) {
        $this->storageFileName = $storageFileName;
        $this->emptyStringFileName = $emptyStringFileName;
        $this->strlenStorageFile = $strlenStorageFile;
        $this->strlenEmptyString = $strlenEmptyString;
        $this->newStringByte = $newStringByte;
    }

    public function __get($name)
    {
        return $this->$name;
    }
}
