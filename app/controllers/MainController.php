<?php
use app\core\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        $this->getView()->render($this->getModel()->getResult());
    }
}