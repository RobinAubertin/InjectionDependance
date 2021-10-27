<?php

include_once 'TodoList.php';
include_once 'TaskFactory.php';

$task = TaskFactory::create("Nom 1", "Description 1");
$todo = new TodoList($task);
$todo->getTask();

var_dump($todo);