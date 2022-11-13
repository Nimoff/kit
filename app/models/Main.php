<?php
namespace app\models;

require_once '../lib/Db.php';
$db = new Db();
class Main
{
    private $result = array();

    public function __constructor(){

    }

    public function getResult()
    {
        $this->result = $this->db->getAll("SELECT * FROM pupil LIMIT 15, 15");
        $json = json_encode($this->result);
        return $json;
    }
}
