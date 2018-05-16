<?php

namespace Model;

abstract class Model
{
    protected $table;

    public function prepare($sql){
        $conn = DB::getCon();
        return $conn->prepare($sql);
    }

    public function buscarPorId($id){
        $stmt = $this->prepare("SELECT * FROM {$this->table} WHERE id = :ID");
        $stmt->bindParam(":ID", $id);
        $stmt->fetch();
        $stmt->closeCursor();
    }

    public function buscarTodos(){
        $stmt = $this->prepare("SELECT * FROM {$this->table}");
        $stmt->fetchAll();
        $stmt->closeCursor();
    }
}