<?php
namespace app\models;
use app\core\Model;

class Main extends Model
{
    private $result = array();

    public function getResult():array
    {
        $this->result = $this->db->getAll("SELECT * FROM pupil");
        return $this->result;
    }
}