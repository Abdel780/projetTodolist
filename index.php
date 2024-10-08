<?php
require "vendor/autoload.php";
session_start();

use App\Controllers\TaskController;
use Config\Router;

$router = new Router();

/** j'utilise la methode addRouute de mon controller pour ajouter des routes au controller
 *  cette methode prends trois argument, la route, le controller et la methode executé
 */
$router->addRoute('/', 'HomeController', 'index');
$router->addRoute('/register', 'RegisterController', 'index');
$router->addRoute('/connection', 'ConnectionController', 'index');
$router->addRoute('/logout', 'LogoutController', 'logout');
$router->addRoute('/addTask', 'TaskController', 'createTask');
$router->addRoute('/task', 'TaskController', 'index');
$router->addRoute('/editTask', 'TaskController', 'editTask');
$router->addRoute('/deleteTask', 'TaskController', 'deleteTask');
$router->addRoute('/deleteTaskAndTodo', 'TaskController', 'deleteTaskAndTodo');
$router->addRoute('/assignTask', 'TaskController', 'addKidTask');
$router->addRoute('/updateAssignTask', 'TaskController', 'updateTodoTask');




$router->handleRequest();

