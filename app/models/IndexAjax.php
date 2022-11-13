<?php
namespace app\models;
use app\core\Model;

class Main
{
    private $result = array();
    private $db;
    private $std;

    public function __construct(){
        $data = file_get_contents('php://input');
        try {
            $this->db = new \PDO('mysql:host=localhost;dbname=ai', 'admin', 162534);
            if(!$this->db)throw new \PDOException();
        }catch (\PDOException $e){
            echo 'Не установлено соединение с базой данных '.$e->getMessage();
        }
        $this->std = $this->db->prepare("SELECT * FROM pupil ORDER BY surname LIMIT {$data}, 15");
    }

    public function getResult()
    {
        $this->std->execute();
        $this->result = $this->std->fetchAll(\PDO::FETCH_ASSOC);
        $json = json_encode($this->result);
        echo $json;
    }
}
$db = new Main();

$db->getResult();