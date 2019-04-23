<?php 

class Route {
	public function __construst($path, $callable){
		$this->path = $path;
		$this->callable = $callable;
	}	
}