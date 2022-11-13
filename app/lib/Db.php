<?php
namespace app\lib;

class Db
{
    private $db;
    private $row = array();

    public function __construct()
    {
        $params = require_once ROOT . '/app/config/dbConnect.php';

        try {
            $this->db = new \PDO($params['dsn'], $params['user'], $params['password']);
            if(!$this->db)throw new \PDOException();
        }catch (\PDOException $e){
            echo 'Не установлено соединение с базой данных '.$e->getMessage();
        }
    }

    public function query($sql, $param = [])
    {
        $std = $this->db->prepare($sql);
        foreach($param as $k =>$v){
            if(is_int($v)){
                $type = \PDO::PARAM_INT;
            }
            else{
                $type = \PDO::PARAM_STR;
            }
            $std->bindParam(':'.$k, $v, $type);
        }
        $std->execute();
        return $std;
    }

    public function getAll($sql, $param = []): array
    {
        $result = $this->query($sql, $param = []);
        $this->row = $result->fetchAll(\PDO::FETCH_ASSOC);
        return $this->row;
    }

    public function getOne($sql, $param = []): array
    {
        $result = $this->query($sql, $param = []);
        $this->row = $result->fetch(\PDO::FETCH_ASSOC);
        return $this->row;
    }
}