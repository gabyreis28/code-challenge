<?php

namespace Src\Controllers;

use CoffeeCode\Router\Router;
use League\Plates\Engine;

/**
 * @package Source\Controllers
 * @class Controller
 */
abstract class Controller
{
  /**
   * @var Engine
   */
  protected $view;

  /**
   * @var Router
   */
  protected $router;

  /**
   * @param  mixed $router
   * @return void
   */
  public function __construct($router)
  {
    $this->router = $router;
    $this->view = Engine::create(dirname(__DIR__, 2) . "/src" . "/views", "php");
    $this->view->addData(["router" => $this->router]);
  }
}
