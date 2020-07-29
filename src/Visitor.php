<?php

namespace CounterOnline;

class Visitor
{
    private $id = null;
    private $key;

    public function __construct(string $string = null)
    {
        if (($string != null) && (strlen($string) > 13)) {
            $this->key = substr($string, -13);
            $this->id = str_replace($this->key, '', $string);
        } else {
            $this->key = uniqid();
        }
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getString()
    {
        return $this->id . $this->key;
    }

    public function __get($name)
    {
        return $this->$name;
    }
}
