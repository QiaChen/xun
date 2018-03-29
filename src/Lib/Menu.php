<?php
namespace App\Lib;

class Menu{

	static private $MENUS;
	private $key;
	private $name;
	private $url;
	private $icon;
	private $parentKey;
	private $child;

	public function __construct($key,$name,$url,$parentKey,$icon=''){
		$this->key = $key;
		$this->name = $name;
		$this->url = $url;
		$this->parentKey = $parentKey;
		$this->icon = $icon;
	}

	public function __set($_name,$_val){
     $this->$_name=$_val;
  	}

  	public function __get($_name){
  		return $this->$_name;
  	}

  	public function push(){
		  self::$MENUS[$this->key] =$this;
		  return $this;
	}

	public function del(){
		unset(self::$MENUS[$this->key]);
	}

	static public function getList($pk,$child = false){
		$arr = [];
		foreach(self::$MENUS as $key=>$val){
			if($val->parentKey == $pk){
				if($child){
					$val->child = self::getList($val->key,true);
				}
				array_push($arr,$val);
			}
		}
		return $arr;
	}

	static public function get($key){
		return self::$MENUS[$key];
	}
	  
}
?>