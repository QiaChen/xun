<?php
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\Event\EventManager;

class AppController extends Controller
{

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->createMenu();
    }

    public function createMenu(){
        $event = new Event('Menu.Create', $this, ['test'=>123]);
        EventManager::instance()->dispatch($event);
        $menu = [];
        foreach($event->data as $key=>$value){
            
        }
    }

    public function beforeRender(\Cake\Event\Event $event)
    {
        //$this->viewBuilder()->setTheme('Xuntheme');
    }
}
