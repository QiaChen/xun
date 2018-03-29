<?php
namespace App\Controller;
use Cake\Cache\Cache;

class AppManagerController extends AppController{

	public function test(){
		$this->autoRender = false;
		Cache::write('test',['a'=>'111','b'=>'4321']);
	}

	public function read(){
		$this->autoRender = false;
		print_r( Cache::read('test'));
	}
}

?>