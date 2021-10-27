<?php
class Task
{
    private $name;
    private $description;

    public function __construct($name, $description){
        $this->name = $name;
        $this->description = $description;
    }
}