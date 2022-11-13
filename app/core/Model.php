<?php

namespace app\core;
use app\lib\Db;

abstract class Model
{
    protected $db;

    function __construct()
    {
        $this->db = new Db;
    }
}