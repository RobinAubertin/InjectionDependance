<?php

include_once 'Task.php';

class TaskFactory
{
    public function __construct()
    {

    }

    public static function create($name, $description)
    {
        return new Task($name, $description);
    }
}