<?php
require_once './App/model/BaselModel.php';
require_once './App/controller/slideController.php';
require_once './App/model/test.php';
require_once './App/model/DB.php';
require_once './App/controller/Controller.php';
$url = isset($_GET['url']) ? $_GET['url'] : "/";
//require_once './vendor/autoload.php';
//require './Common/database-config.php';
//use App\Controller\slide_showController;
//use App\Controller\test;
include './App/view/slider_show/exam.php';
//use App\Controller;
//use App\slideController;
//use model\DB;
//use model\BaselModel;
switch ($url) {
    case "exam":
//        $ctrl = new Controller\Controller();
//        $ctrl= new exam();
//        $ctrl->test1();
//        include './App/view/slider_show/exam.php';
//        include './App/controller/slideController.php';
        $ctrl= new exam();
        $ctrl->test2();
        break;
//    case "our_room":
//        $ctrl = new test();
//        var_dump($ctrl);
//        echo $ctrl->index();
//        break;
    default:
        break;
}
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

