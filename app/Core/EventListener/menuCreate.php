<?php
namespace App\EventListener;
use Cake\Event\EventListenerInterface;
use App\Lib\Menu;

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
        $indexMenu = new Menu('system','系统','/admin/set/system','admin',114);
        $indexMenu->push();
        $newMenu = new Menu('system_set','系统设置','/admin/set/system','system',12);
        $newMenu->push();
    }
}

?>