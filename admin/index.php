<?php
require "Core/Database.php";
require "Models/BaseModel.php";
require "Controllers/BaseController.php";




$controller = $_REQUEST['Controller'] ?? 'login';
$controllerName = ucfirst((strtolower($controller) .'Controller')) ;
$actionName = strtolower($_REQUEST['action'] ?? 'index' );
require "Controllers/${controllerName}.php";

$controllerObject = new $controllerName;

$controllerObject -> $actionName();