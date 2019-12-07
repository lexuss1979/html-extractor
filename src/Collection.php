<?php


class Collection
{
    protected $name;
    protected $extractor;
    public function __construct($name, $extractor)
    {
        $this->name = $name;
        $this->extractor = $extractor;
    }
}