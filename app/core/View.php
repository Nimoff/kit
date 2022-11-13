<?php

namespace app\core;

class View
{
    private $path;
    private $layout = 'index';

    public function __construct($viewFolder, $viewFile)
    {
        $this->path = ROOT.'/app/views/'.$viewFolder.'/'.$viewFile.'.php';
        if($viewFolder == 'account') $this->layout = 'account';
    }

    public function render($params = []){
        if(file_exists($this->path)) {
            ob_start();
            require_once $this->path;
            $content = ob_get_clean();
            require_once ROOT.'\app\views\layout\\'.$this->layout.'.php';
        }
    }

    public static function errorPage($code)
    {
            http_response_code($code);
            require_once ROOT.'/app/views/errors/'.$code.'.php';
    }
}