<?php
namespace Admin\EventListener;
use Cake\Event\EventListenerInterface;
use App\lib\Menu;


use Cake\Event\EventManager;
class menuCreate implements EventListenerInterface
{
    
    public function implementedEvents()
    {
        return [
            'Menu.Create' => array(
                    'callable'=>array($this,'create'),
                    'priority'  =>  8
                )
        ];
    }

    public function create($event){
        $indexMenu = new Menu('index','首页','/admin','admin');
        $indexMenu->push();
    }
}

?>