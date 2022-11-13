<?php
namespace app\core;
use app\core\View;

class Router
{
    private $arr;

    public function __construct()
    {
        $this->arr = require_once ROOT.'\app\config\routes.php';
    }

    public function requestUri(): string
    {
        return $this->uri = substr($_SERVER['REQUEST_URI'],5);
    }



    public function run(): ?object
    {
        $request = $this->requestUri();


        foreach ($this->arr as $keyArr => $valueArr) {

            if (preg_match("#$keyArr#", $request)) {

                $finalString = preg_replace("~$keyArr~", $valueArr, $request);

                $arrRequest = explode("/", $finalString);

                $viewFolder = $arrRequest[0];
                $controllerName = ucfirst(array_shift($arrRequest)) . 'Controller';

                $viewFile = $arrRequest[0];
                $actionName = ucfirst(array_shift($arrRequest)) . 'Action';

                $param = array_shift($arrRequest);

                $controllerFile = ROOT . "/app/controllers/" . $controllerName . '.php';
                if (file_exists($controllerFile)) {

                    require_once $controllerFile;

                    $controllerClass = new $controllerName($viewFolder, $viewFile);

                    if(method_exists($controllerClass,$actionName)){

                        $result = $controllerClass->$actionName($param);

                        return $result;
                    }

                }
            }
        }
        return View::errorPage('404');
    }
}