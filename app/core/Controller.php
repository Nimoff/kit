<?php
namespace app\core;
use app\core\View;

abstract class Controller
{
    private $view;
    private $model;

    public function __construct($viewFolder, $viewFile)
    {
        $this->model = $viewFolder;
        $this->view = new View($viewFolder, $viewFile);
    }

    public function getView(): object
    {
        return $this->view;
    }

    public function getModel(): object
    {
        $path = 'app\models\\'.ucfirst($this->model);
        return new $path;
    }
}

