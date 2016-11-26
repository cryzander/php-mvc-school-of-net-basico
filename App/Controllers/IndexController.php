<?php

namespace App\Controllers;

class IndexController
{
	private $view;

	public function __contruct()
	{
		$this->view = new \stdClass;
	}
	public function index()
	{
		$this->view->cars = array ("Mustang", "Ferrari");
		// Lembrando que atualmente você vai estar no index
		$this->render("index");
	}

	public function contact()
	{
		$this->view->cars = array ("Mustang", "Ferrari");
		$this->render("contact");
	}

	public function render($action)
	{
		$current = get_class($this);
		echo "Classe current: ".$current;
		$singleClassName = strtolower((str_replace("Controller","",str_replace("App\\Controllers\\","",$current))));
		// Pega a somente a pasta onde a view estará
		// As pastas dentro das view são as que fazem referência a esse controller (indexController, por exemplo)
		echo "SingleClassName: ".$singleClassName;
		include_once "../App/Views/".$singleClassName."/".$action.".phtml";
	}
}
