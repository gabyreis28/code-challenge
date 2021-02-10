<?php

namespace Src\Controllers;

class Web extends Controller
{
  public function __construct($router)
  {
    parent::__construct($router);
  }

  public function home():void
  {
    $view = $this->view->render("theme/home", []);

    print_r($view);
  }
}
