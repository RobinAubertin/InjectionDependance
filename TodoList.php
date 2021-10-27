<?php

include_once 'Task.php';

class TodoList
{
    private $task;

    public function __construct(Task $task)
    {
        $this->task = $task;
    }

    public function getTask(){
        return $this->task;
    }
}