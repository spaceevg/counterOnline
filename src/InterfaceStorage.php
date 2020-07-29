<?php

namespace CounterOnline;

interface InterfaceStorage
{
    public function get($id = null):Record;
    public function set(Record $record);
    public function getCount();
    public function clear();
}
