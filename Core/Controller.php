<?php
class Controller
{
	private $url;
	private $controller;
	private $method;
	private $class;
	private $count;
	private $dados;
	function __construct()
	{
		$this->url = isset($_GET['url']) ? explode('/', $_GET['url']) : [0 => 'users', 1 => 'index'];
		$this->controller = $this->url[0];
		$this->method	= $this->url[1];
		require_once "Controllers/".$this->controller.".php";
		$this->class = new $this->controller;
		$this->count = count($this->url);
		switch ($this->count)
		{
			default:
				$method = $this->method;
				$this->dados = $this->class->$method();
				break;
		}
	}
	public function init()
	{
		return $this->dados;
	}
}
?>