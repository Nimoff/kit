<?php
use app\core\Controller;

class AccountController extends Controller
{
    public function loginAction(){
        $this->getView()->render();
        echo $this->getModel()->her();
    }
}