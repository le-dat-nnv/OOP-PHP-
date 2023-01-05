<?php

class BaselModel {

    public $connect;

    public function __construct() {
        $host = "localhost";
        $db_name = "exam_five";
        $username = "root";
        $pass = "";
        $this->connect = new PDO("mysql:host; db_name=$db_name", $username, $pass);
        $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $this->connect;
    }

    public static function get_db() {
        $model = new static;
        $query = "select * from " . $model->table;
        $tv = $model->connect->prepare($query);
        $tv->execute();
        $th = $tv->fetchAll();
        return $th;
    }

    public function insert() {
        $this->queryBuilder = "insert into exam_five.$this->table (";
        foreach ($this->columns as $col) {
            if ($this->{$col} == null) {
                continue;
            }
            $this->queryBuilder .= "$col, ";
        }
        $this->queryBuilder = rtrim($this->queryBuilder, ", ");
        $this->queryBuilder .= ") values ( ";
        foreach ($this->columns as $col) {
            if ($this->{$col} == null) {
                continue;
            }
            $this->queryBuilder .= "'" . $this->{$col} . "', ";
        }
        $this->queryBuilder = rtrim($this->queryBuilder, ", ");
        $this->queryBuilder .= ")";
        return $this;
    }

    public static function table($nameTable) {
        $table = $this->table;
        return $table;
    }

    function select_sql($sql) {
        $tv = $this->connect->query($sql);
        $th = $tv->fetchAll();
        return $th;
    }

    public function get_select_one($sql) {
        $query = array();
        $tv = $this->connect->prepare($sql);
        $tv->execute($query);
        $row = $tv->fetch(PDO::FETCH_ASSOC);
        return $row;
    }

    public static function all() {
        $model = new static();
        $sql = "select * from exam_five." . $model->table;
//        $tv = $model->connect->query($sql);
//        $th = $tv->fetchAll();
//        return $th;
        $stmt = $model->connect->prepare($sql);
        $stmt->execute();
//        $rs = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
        return $stmt->fetchAll();
    }

    public static function destroyId() {
        $model = new static();
        $sql = "select * from exam_five.$model->table";
        $stmt = $model->connect->prepare($sql);
        $stmt->execute();
//        $rs = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
        return $stmt->fetchAll();
    }

    public static function where($id, $values) {
        $model = new static();
        $model->queryBuilder = "select * from exam_five.$model->table where $id=" . $values;
        return $model;
    }


    public function get() {
        // var_dump($this->queryBuilder);die;
        $stmt = $this->connect->prepare($this->queryBuilder);
        $stmt->execute();
        $rs = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($this));
        return $rs;
    }

}

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

