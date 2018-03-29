<?php
namespace Admin\Controller;
use App\Controller\AppController as BaseController;
use App\Lib\Menu;


class AdminController extends BaseController
{	

	public function initialize(){
        parent::initialize();
        $this->viewBuilder()->setTheme('Admin');
        $this->set('topMenu',Menu::getList('admin'));
        $this->viewBuilder()->layout('admin');
    }

}
