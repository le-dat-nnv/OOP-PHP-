<?php
class exam {
function test2() {
    $models = new test();
//    //3 cap nhat du lieu tu form vao model
    $models->ma_kh = $_POST['name'];
    $models->ma_room = $_POST['id'];
//    //4 save
    $models->insert()->get();
}
}
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

