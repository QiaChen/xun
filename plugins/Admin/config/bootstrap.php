<?php
use Cake\Event\EventManager;
use Admin\EventListener\menuCreate;

$listener = new menuCreate();
EventManager::instance()->on($listener);

?>