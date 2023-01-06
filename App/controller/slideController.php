<?php
class exam {
<<<<<<< HEAD
//function test1() {
//    $models = new db();
//    //3 cap nhatdu lieu tu form vao model
//    $models->coupon_code = $_POST['name'];
//    $models->discount = $_POST['id'];
//    //4 save
//    $models->insert()->get();
//}
// test 3 
function test3() {
    $models = new test();
    $models->ma_kh = $_POST['name'];
    $models->ma_room = $_POST['id'];
    $models->insert()->get();
}
=======
>>>>>>> e3deb6af50a91a1154902800bdbd0aebbf85c762
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

