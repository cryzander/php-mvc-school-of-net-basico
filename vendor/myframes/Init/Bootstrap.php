<?php
namespace myframes\Init;

abstract class Bootstrap
{
	private $routes;
	
	public function __construct()
	{
		$this->initRoutes();
		$this->run($this->getUrl());
	}
	
	abstract protected function initRoutes();

	protected function run($url)
	{
		// Essa função simplesmente executa a ação da url passada caso exista.
		array_walk($this->routes, function($route) use ($url) {
				if($url == $route['route']){
					// Se existir essa rota - digitada pelo usuário
					$class = "App\\Controllers\\".ucfirst($route['controller']);
					// Pega o valor do array passado na posição controller e colocar a primeira
					// letra maiuscula (para que se consiga instanciar a classe do controller)
					$controller = new $class;
					// Instancia um controlador para aquela rota - existindo e claro
					$action = $route['action'];
					// Identifica a action desta rota
					$controller->$action();
					// chama a action (acao) que esta dentro do controlador
				}
			});
	}

	protected function setRoutes(array $routes)
	{
		$this->routes = $routes;
	}

	protected function getUrl()
	{
		return parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
	}
}
