<?php
namespace Engine;
/**
  * 
  */
 class DI
 {
 	private $container = [];
 	public function add($key, $value){
 		$this->container[$key] = $value;
 		return $this;
 	}
 	public function get($key){
 		return $this->container[$key];
 	}
 	public function remove($key){
 		unset($this->container[$key]);
 	}
 	public function has($key){
 		if (isset($this->container[$key])) {
 			return $this->container[$key];
 		}
 		return false;
 	}
 } 
?>