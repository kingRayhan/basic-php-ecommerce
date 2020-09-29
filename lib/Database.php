<?php

require_once __DIR__ . '/config.php';

class Database
{

    private $db;

    /**
     * Database constructor.
     */
    public function __construct()
    {
        $this->db = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";port=" . DB_PORT . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
    }

    /**
     * @return PDO
     */
    public function getDb()
    {
        return $this->db;
    }


    public function query($query, $fetchStyle = PDO::FETCH_OBJ)
    {
        $q = $this->db->query($query);
        return $q->fetch($fetchStyle);
    }

    public function queryAll($query, $fetchStyle = PDO::FETCH_OBJ)
    {
        $q = $this->db->query($query);
        return $q->fetchAll($fetchStyle);
    }

    public function create($query, $params)
    {
        $q = $this->db->prepare($query);
        return $q->execute($params);
    }

    public function delete($table, $id)
    {
        $this->query("delete from " . $table . "where id = " . $id);
    }
}