<?php
use app\core\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        //$this->getModel()->getResult()
        $this->getView()->render();
    }
}