<?php
include_once 'Controller.php';
class Router{
	private $request;
    private $controller;
	public function __construct($request){
		$this->request = $request;
        $this->controller = new Controller();
	}
	public function get($route, $file){
		$uri = rtrim( $route, "/" );
		$uri = explode("/", $uri);
		if($uri[1] == trim($route, "/")){
			array_shift($uri);
			$args = $uri;
            $this->controller->$file();
		}
	}
}
?>