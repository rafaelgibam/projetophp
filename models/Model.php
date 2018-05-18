<?php

namespace models;

abstract class Model
{
    protected $table;

    public function prepare($sql){
        $conn = DB::getCon();
        return $conn->prepare($sql);
    }

    public function selectId($id){
        $stmt = $this->prepare("SELECT * FROM {$this->table} WHERE id = :ID");
        $stmt->bindParam(":ID", $id);
        $stmt->execute();

        return $stmt->fetch();
    }

    public function select(){
        $stmt = $this->prepare("SELECT * FROM {$this->table}");
        $stmt->execute();

        return $stmt->fetchAll();
    }
}