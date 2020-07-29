<?php

namespace CounterOnline;

class Online
{

    protected $storage = null;

    public function __construct(StorageSettings $settings = null, InterfaceStorage $storage = null)
    {
        if ($settings === null) {
            $storageSettings = new StorageSettings();
        } else {
            $storageSettings = $settings;
        }
        if ($storage === null) {
            $this->storage = new Storage($storageSettings);
        } else {
            $this->storage = $storage;
        }
    }

    public function getOnlineCount()
    {
        return $this->storage->getCount();
    }

    public function clear()
    {
        $this->storage->clear();
    }

    public function addVisitor(string $string)
    {
        $visitor = new Visitor($string);
        $record = $this->storage->get($visitor->id);

        if (($record->key) || ($record->key == $visitor->key)) {
            $record->time = time();
            $this->storage->set($record);
        }
    }
}
