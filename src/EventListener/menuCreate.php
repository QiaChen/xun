<?php
namespace App\EventListener;
use Cake\Event\EventListenerInterface;


use Cake\Event\EventManager;
class menuCreate implements EventListenerInterface
{
    

    public function implementedEvents()
    {
        return [
            'Menu.Create' => array(
                    'callable'=>array($this,'create'),
                    'priority'  =>  5
                )
        ];
    }

    public function create($event){

    }
}

?>