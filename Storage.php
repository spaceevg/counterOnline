<?php

interface Storage
{
    public function new(string $content);
    public function update(string $content);
    public function delete();
}
