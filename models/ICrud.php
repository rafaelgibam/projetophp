<?php

namespace models;

interface ICrud
{
    public function insert();
    public function delete($id);
    public function update($id);
}