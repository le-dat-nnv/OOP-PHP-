<?php
class database {
    public $connect = 'le huy dat';
    public function __construct() {
        
    }
    public static function connectDb() {
        $host = "localhost";
        $db_name = "exam_five";
        $username = "root";
        $pass = "";
        $tr = new PDO("mysql:host; db_name=$db_name", $username, $pass);
        $tr->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $tr;
    }
    public static function test() {
        $test = new static();
        return $test->connect;
    }
    

}
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

