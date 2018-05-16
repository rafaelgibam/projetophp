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
        $stmt->fetch();
        $stmt->closeCursor();
    }

    public function select(){
        $stmt = $this->prepare("SELECT * FROM {$this->table}");
        $stmt->fetchAll();
        $stmt->closeCursor();
    }
}