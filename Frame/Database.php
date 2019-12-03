<?php

namespace db;

use PDO;
use PDOException;

class Database
{
    public function __construct()
    {
        try {
            $this->connection = new PDO('mysql:host=localhost;dbname=master;charset=utf8', 'root', '');
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            print "DB Connection Failed: " . $e->getMessage();
        }
    }

//    duomenu atvaizdavimas is DB ekrane
    public function select($sql)
    {
        return $this->connection->query($sql)->fetchAll(PDO::FETCH_OBJ);
    }



    public function deleteInsert($sql, $name)
    {
        return $this->connection->prepare($sql)->execute($name);
    }

    function __destruct()
    {
        $this->connection = null;
    }
}
