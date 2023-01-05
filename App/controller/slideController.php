<?php
//namespace App\slideController;
//use model\DB;
//use db;
//use BaselModel;
//class testController extends Controller{
//    public function test() {
//        $test = db::table('slide_show')->$this->test();
//        // table là 1 hàm 
////        bây giờ thì tạo ra hàm table đi nhé 
//    }
//}
//class test {
//    all
//}
class exam {
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
//    $models = new db();
    $models = new db();
    $data = array();
    $data['coupon_code']=$_POST['name'];
    $data['discount'] = $_POST['id'];
    //3 cap nhatdu lieu tu form vao model
//    $models->coupon_code = $_POST['name'];
//    $models->discount = $_POST['id'];
    //4 save
    $models->insert2($data)->get();
//    return $kl;
}
function test2() {
////    $arr = test::where('id','32')->get();
////    $id =
//    $title = $_POST['name'];
//    $content = $_POST['id'];
////    $created_by = $_POST['created_by'];
//
    $models = new test();
//    //3 cap nhat du lieu tu form vao model
    $models->ma_kh = $_POST['name'];
    $models->ma_room = $_POST['id'];
//    //4 save
    $models->insert()->get();
////    if (!$model) {
////        echo "<h1>Thêm mới thất bại</h1>";
////        die;
////    }
////    $arr = insert()->get();
////    echo '<pre>';
////    print_r($arr);
////    echo '</pre>';
////    $td = list($arr , $model)=
////    return array($arr , $model);
}
}
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

